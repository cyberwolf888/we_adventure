<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Cart;

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
}
