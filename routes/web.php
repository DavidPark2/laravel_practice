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
  $name = "David";
  $age = 59;

  return view('welcome', [
    'name' => $name,
    'age' => $age
  ]);
});

Route::get('/practice', function() {
	return view('practice')->with('now', 'nope');
});

Route::get('/compactMethod', function() {
  $isItCompact = 'nope'

  return view('compact', compact('dunno'));
});
