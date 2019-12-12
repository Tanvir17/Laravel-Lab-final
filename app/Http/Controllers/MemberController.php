<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MemberController extends Controller
{
    function index(){
    	return view('adminHome.addmember');

    }

    function add(Request $request){
    	
    	$user = new User;

    	$user->name = $request->name;
    	$user->contactno = $request->contactno;
    	$user->designation = $request->designation;
    	$user->username = $request->username;
    	$user->password = $request->password;
    	/*$user->created_at = '0000-00-00 00:00:00';
    	$user->updated_at = '0000-00-00 00:00:00';*/

    	if($user->save()){
    		return view('adminHome.index');
    	}
    	else{
    		return redirect()->route('adminHome.addmember');
    	}
    	
    }

    function showlist(){
    	$user = User::all();

    	return view('adminHome.showlist',['user'=>$user]);
    }

    function edit(Request $request, $name){
    	$user = User::find('name');

    	return redirect()->route('adminHome.edit');

    	
    }
}
