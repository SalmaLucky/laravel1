<?php


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\Backend\Product;


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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');
//product
Route::group(['prefix'=>'/product'], function () {
    Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->name('store');
    Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->name('create');
    Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->name('manage');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('edit');
    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('update');
    Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->name('delete');

});
//category
Route::group(['prefix'=>'/category'], function () {
    Route::post('/store','App\Http\Controllers\Backend\CategoryController@store')->name('store-category');
    Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->name('create-category');
    Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('manage-category');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('edit-category');
    Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('update-category');
    Route::get('/delete/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->name('delete-category');

});


