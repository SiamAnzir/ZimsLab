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

//Route::get('/', 'labController@preview')->name('welcome');
Route::get('/', 'labController@search')->name('search'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hardwareList', 'labController@hardwareList')->name('hardwareList');
Route::get('/addHardwares', 'labController@addHardwares')->name('addHardwares');
Route::get('/category', 'labController@category')->name('category');
Route::post('/category', 'labController@addCategory')->name('addCategory');
Route::get('/subCategory', 'labController@subCategory')->name('subCategory');
Route::post('/subCategory', 'labController@addSubCategory')->name('addSubCategory');
Route::get('/hardware', 'labController@hardware')->name('hardware');
Route::post('/hardware', 'labController@addHardware')->name('addHardware');
Route::get('/management','labController@management')->name('management');
Route::get('/manageCategory','labController@manageCategory')->name('manageCategory');
Route::delete('/deleteCategory{id}','labController@deleteCategory')->name('deleteCategory');
Route::get('/editCategory{id}','labController@editCategory')->name('editCategory');
Route::put('/updateCategory{id}','labController@updateCategory')->name('updateCategory');
Route::get('/manageSubCategory','labController@manageSubCategory')->name('manageSubCategory');
Route::delete('/deleteSubCategory{id}','labController@deleteSubCategory')->name('deleteSubCategory');
Route::get('/editSubCategory{id}','labController@editSubCategory')->name('editSubCategory');
Route::put('/updateSubCategory{id}','labController@updateSubCategory')->name('updateSubCategory');
