<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

class ProfileController extends Controller
{

    public function index()
    {
        return view('member.profile.form');
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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $filter = [
            'name' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required'
        ];

        if($request->email === $user->email){
            $filter['email'] = 'required|string|email|max:255';
        }else{
            $filter['email'] = 'required|string|email|max:255|unique:users';
        }

        if($request->password != null){
            $filter['password'] = 'required|string|min:6|confirmed';
            $user->password = bcrypt($request->password);
        }

        $validator = Validator::make($request->all(),$filter);

        if ($validator->fails()) {
            return redirect()
                ->route('member.profile.index')
                ->withErrors($validator)
                ->withInput();
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('berhasil','Profile anda berhasil diperbarui.');
    }

    public function destroy($id)
    {
        //
    }
}
