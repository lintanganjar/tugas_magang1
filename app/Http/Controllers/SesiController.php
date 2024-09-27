<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
   function index(){
    return view("login");
   }

   function login(Request $request){
    $request->validate([
        'email'=>'required',
        'password'=> 'required'
    ],
    [
        'email.required'=>'Email Wajib diisi',
        'password.required'=>'Password Wajib diisi',
    ]);
     
    $infologin=[
        'email'=>$request->email,
        'password'=>$request->password,
    ];

    if(Auth::attempt($infologin)){
       if(Auth::user()->role=='kaprodi'){
        return redirect('kaprodi/kaprodi');
       }elseif(Auth::user()->role== 'dosen'){
        return redirect('kaprodi/dosen');
       } elseif(Auth::user()->role== 'mahasiswa'){
        return redirect('kaprodi/mahasiswa');
       }


    } else {
        return redirect('')->withErrors('Username atau Password yang dimasukkan tidak sesuai')->withInput();
    }

   }

   function logout(){
    Auth::logout();
    return redirect('');
   }
}
