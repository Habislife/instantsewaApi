<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::prefix('auth')->group(function(){
	Route::post('/register','AuthController@register');
	Route::post('/login','AuthController@login');
	Route::get('/logout','AuthController@logout')->middleware('auth:api');
	Route::get('/user','AuthController@user')->middleware('auth:api');
	Route::get('authentication-failed','AuthController@authFailed')->name('auth-failed');
});
Route::group(['middleware'=>'auth:api'],function(){
Route::resource('category','CategoryController');
Route::resource('subcategory','SubCategoryController');
Route::resource('category.subcategory','CategorySubCategoryController');
Route::resource('subcategory.service','SubCategoryServiceController');
Route::resource('service','ServiceController');
Route::resource('serviceprovider','ServiceProviderController');
Route::resource('favourite','FavouriteController');
Route::resource('serviceuser.favourite','ServiceUserFavouriteController',['only'=>['index']]);
Route::post('checker','FavouriteCheckerController@isAvailable');
Route::post('deleteFavourite','FavouriteCheckerController@deleteFavourite');
Route::post('fullnameUpdate','ServiceUserUpdate@updateFullName');
Route::post('addressUpdate','ServiceUserUpdate@updateAddress');
Route::post('phoneNoUpdate','ServiceUserUpdate@updatePhoneNo');
});
Route::resource('address','AddressController');
Route::resource('admin','AdminController');