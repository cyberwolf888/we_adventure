<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Cart;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function category($id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id',$id)->where('available', '1')->get();
        return view('frontend.category',[
                'category'=>$category,
                'products'=>$products
            ]);
    }

    public function product($id)
    {
        $product = Product::find($id);

        return view('frontend.product',[
            'product'=>$product
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('name','like','%'.$keyword.'%')->where('available', '1')->get();
        return view('frontend.search',[
            'products'=>$products
        ]);
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function cart_add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        if($request->qty > $product->stock){
            return response()->json([
                'status' => '0',
                'error' => 'Stock yang tersedia hanya '.$product->stock
            ]);
        }

        $details = ProductDetail::where('product_id',$product->id)->pluck('value','label')->toArray();
        $price = $product->price;
        if($product->discount>0){
            $price = $product->price-($product->price*$product->discount/100);
        }
        Cart::instance('cart')->add($product->id, $product->name, $request->qty, $price, $details)->associate('App\Models\Product');
        return response()->json([
            'status' => '1'
        ]);
    }

    public function cart_clear()
    {
        Cart::instance('cart')->destroy();
        return redirect()->back();
    }

    public function cart_delete(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);

        return redirect()->back();
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function checkout_proses(Request $request)
    {
        $transaction = new Transaction();
        $transaction->id = $transaction->createId();
        $transaction->member_id = Auth::user()->id;
        $transaction->fullname = Auth::user()->name;
        $transaction->phone = Auth::user()->phone;
        $transaction->address = Auth::user()->address;
        $transaction->durasi = $request->durasi;
        $transaction->total = Cart::instance('cart')->total('0','','')*$request->durasi;
        $transaction->status = Transaction::NEW_ORDER;
        $transaction->save();

        $cart = Cart::instance('cart');
        foreach ($cart->content() as $row)
        {
            $detail = new TransactionDetail();
            $detail->transaction_id = $transaction->id;
            $detail->product_id = $row->id;
            $detail->qty = $row->qty;
            $detail->price = $row->price;
            $detail->total = $row->qty*$row->price;
            $detail->save();

            $product = Product::find($detail->product_id);
            $product->stock = $product->stock-$detail->qty;
            $product->save();
        }
        $cart->destroy();

        return redirect()->route('finish');
    }

    public function finish()
    {
        return view('frontend.finish');
    }
}
