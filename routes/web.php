<?php

use Illuminate\Support\Facades\Route;

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
//home
Route::get('/', function () {
	$menu = [
		'FAQ' => '/FAQ',
		'about_us' => '/about-us',
		'contacts' => 'contacts'
	];
	return view('home', compact('menu'));
})->name('homepage');

//FAQ
Route::get('/FAQ', function () {
	$hello = 'pagina FAQ';
	return view('FAQ', compact('hello'));
})->name('FAQ');

//ABOUT-US
Route::get('/about-us', function () {
	$hello = 'pagina about-us';
	return view('about-us', compact('hello'));
})->name('about-us');

//CONTACTS
Route::get('/contacts', function () {
	$hello = 'pagina contatti';
	return view('contacts', compact('hello'));
})->name('contacts');
