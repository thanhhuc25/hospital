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
Route::get('/form-patient',function(){
	return view('form-patient');
});

Route::post('/submit-form-patient',function(Request $request){
	$validator = Validator::make($request->all(),[
		'name' => 'required|max:255',
		'age' => 'required',
		'temp' => 'required',
	]);
	if($validator->fails()){
		return back()->withInput()->withErrors($validator);
	}
})