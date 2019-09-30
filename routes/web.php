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

/* Route::get('/', function () {
    return view('welcome');
}); */
  
Route::get('/chat', 'ChatController@chat');
Route::post('/send', 'ChatController@send');
Route::post('stillsave','ChatController@stillsave');
Route::post('getOldMessage','ChatController@getOldMessage');
Route::get('/CityRadio','ChatController@CityRadio');//sama dengan ss
Route::post('/sendcity','ChatController@sendcity');//sama dengan send
Route::get('/medan','ChatController@medan');//sama dengan cityradio get
Route::post('/sendmedan','ChatController@sendmedan');//sama dengan send post
Route::get('check',function(){
    return session('chat');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/welcome','HomeController@welcome');
Route::get('/home','HomeController@register');
Route::get('/admin','AdminController@index');
Route::get('/admin.chat','AdminController@allchat');
Route::get('/admin.CityRadio', 'AdminController@CityRadio');
Route::get('/admin.medan', 'AdminController@medan');
Route::get('/admin.index','AdminController@beranda');
Route::get('/admin.AllChat','AdminController@adminsuper');//untul AllChat
Route::get('/admin.home','AdminController@register');
Route::get('/tampilan_user','HomeController@tampilan_user');
Route::get('/admin.UserCity/{users}','AdminController@show');


/* Route::get('/admin/index','AdminController@register'); */
/* Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth']], function(){// prefix => admin adalaha nama yang akan diletakkan di browser nanti na, yang harus sama dengan yang disini dengan yang di browser
    Route::resource('/', 'AdminController');//seharusna Route::resource('admin', 'AdminController'); seharusna begini, lw begini dijlankan maka not found, maka cukup ('admin','AdminController') diubah menjadi ('/','AdminController'), karena sudah digunkan di prefix => admin.
}); */



