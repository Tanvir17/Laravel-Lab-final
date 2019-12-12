<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    function index(){
    	return view('login.index');
    }

    function verify(Request $request){
    	$user = User:: where('username', $request->username)
    				->where('password', $request->password)
    				->first();
    	if($user != null){
    		return redirect()->route('home.index');}
    	else{
    		return redirect()->route('login.index');

    	}
    }

    function admin(){
    	return view('login.index');
    }
    function adminVerify(Request $request){
    	$user = User:: where('username', $request->username)
    				->where('password', $request->password)
    				->where('designation', 'admin')
    				->first();
    	if($user != null){
    		return redirect()->route('home.index');}
    	else{
    		return redirect()->route('login.index');

    	}
    }
}
