<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function signout(){
        Auth::logout();
        return redirect(route('signin'));
    }
    public function signup(){
        return view('auth.signup');
    }
    public function signin(){
        if(Auth::check()){
            if(Auth::user()->role=="admin"){
                return redirect(route('dashadmin'));
            }else{
                return redirect(route('dashcustomer'));
            }
        }else{
            return view('auth.signin');
        }
    }

    public function doSignup(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'password'=>'required',
        ],[
            'name.required'=>'Name harus di isi',
            'phone.required'=>'Phone harus di isi',
            'email.required'=>'Email harus di isi',
            'password.required'=>'Password harus di isi',
        ]);

        User::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>"customer",
        ]);
        $credentials=$request->only('email','password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect(route('dashcustomer'))->withSuccess('Pendaftaran berhasil.');
    }
    public function doSignin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email harus di isi',
            'password.required'=>'Password harus di isi',
        ]);

        $credentials=$request->only('email','password');
        Auth::attempt($credentials);
        if(Auth::user()->role=="admin"){
            $request->session()->regenerate();
            return redirect(route('dashadmin'))->withSuccess('Login Berhasil');
        }else{
            $request->session()->regenerate();
            return redirect(route('dashcustomer'))->withSuccess('Login Berhasil');
        }

    }
    public function dashCustomer(){
        if(Auth::check()){
            if(auth()->user()->role=="customer"){
                $id=Auth::user()->id;
                $pesanan=DB::table('pesanan')->where('user_id',$id)->get();
                return view('customer.home',compact('pesanan'));
            }
            return back();
        }
        return redirect(route('signin'));
    }
    public function dashAdmin(){
        if(Auth::check()){
            if(auth()->user()->role=="admin"){
                $pesanan = Pesanan::all();
                $customer = User::where('role','customer')->get();
                return view('admin.home',compact('pesanan', 'customer'));
            }
        }
        return back();
    }
}
