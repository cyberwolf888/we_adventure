<?php

namespace App\Http\Controllers\Member;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class TransaksiController extends Controller
{

    public function index()
    {
        $model = Transaction::where('member_id',Auth::user()->id)->get();
        return view('member.transaksi.manage',[
            'model'=>$model
        ]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $model = Transaction::find($id);
        return view('member.transaksi.detail',[
            'model'=>$model
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
