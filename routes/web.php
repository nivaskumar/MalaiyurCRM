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
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('task','TaskController');
//Route::group( ['middleware' => 'auth' ], function(){
//});
Route::get('/roles', 'PermissionController@Permission');
Route::delete('/task/id',function($id){
	
});
Route::group(['middleware' => 'role:manager'], function() {

   Route::get('/admin', function() {

      return 'Welcome Admin';
      
   });

});
Route::get('/clean',function(){
	Artisan::call('cache:clear');
	return 'cache cleared';
});
Auth::routes();
Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
Route::get('/home', 'HomeController@index')->name('home');
