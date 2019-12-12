<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminloginController extends Controller
{
     function admin(){
    	return view('login.index');
    }
    function adminVerify(Request $request){
    	$user = User:: where('username', $request->username)
    				->where('password', $request->password)
    				->where('designation', 'admin')
    				->first();
    	if($user != null){
    		return view('adminHome.index');
    	}
    	else{
    		return redirect()->route('login.index');

    	}
    }
}
