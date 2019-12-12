<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/adminlogin', 'AdminloginController@admin')->name('login.admin');
Route::post('/adminlogin', 'AdminloginController@adminVerify');
Route::get('/adminhome', 'AdminloginController@index')->name('adminHome.index');


Route::get('/addmember', 'MemberController@index')->name('addmember.index');
Route::post('/addmember', 'MemberController@add');

Route::get('/memberlist', 'MemberController@showlist')->name('member.list');

Route::get('/memberlist/edit/{name}', 'MemberController@edit')->name('member.edit');

Route::get('/memberlist/delete', 'MemberController@showlist')->name('member.list');

