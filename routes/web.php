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

//Route::get('/about' , function() {
	//return '<h1>Halo</h1>'
	//.'selamat datang di webapp saya<br>'
	//.'laravel, emang keren';
	//});

//Route::get('/about/1' , function() {
	//return '<h1>Halo</h1>'
	//.'<b><i>halaman1</i></b>';
	//});

//Route::get('/about/2' , function() {
	//return '<h1>Halo</h1>'
	//.'<b><i>halaman2</i></b>';
	//});

//Route::get('/about/3' , function() {
	//return '<h1>Halo</h1>'
	//.'<b><i>halaman3</i></b>';
	//});

//Route::get('/about/4' , function() {
	//return '<h1>Halo</h1>'
	//.'<b><i>halaman4</i></b>';
	//});

//Route::get('/about/5' , function() {
	//return '<h1>Halo</h1>'
	//.'<b><i>halaman5</i></b>';
	//});

//Route::get('/kontak',function(){
//	return view('kontak')
//    });

//Route::get('about/{page}',function($a){
	//return 'ini halaman about <b>'.$a.'</b>';
    //});

Route::get('/kantin/{bakso}/{susu}/{bolu}',function($a,$b,$c){
	return 'saya pesan <b>'.$a.'.</b><br>.'
	.'minumnya susu <b>'.$b.'.</b><br>.'
	.'tambah cemilan bolu <b>'.$c.'.</b><br>.';
});

Route::get('user/{nama?}',function ($name = 'Jhon'){
	return 'Nama Saya '.$name;
});


