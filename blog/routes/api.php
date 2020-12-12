<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
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

Route::post('/register',"RegisterationController@SignUp");

//Route::get('/api/autherror',"ErrorController@AuthError");

Route::get('autherror', 'ErrorController@AuthError')->name('autherror');


//Route::post('/addcomment',"CommentsController@create");


Route::middleware('auth:api')->post('/addcomment', function (Request $request) {

    $response = new \App\Http\Controllers\CommentsController();
    return $response->create();
});

Route::group(['middleware' => ['cors', 'json.response']], function () {
    // ...
    Route::get('/login', 'Auth\ApiAuthController@login')->name('login.api');

    Route::post('/register','Auth\ApiAuthController@register')->name('register.api');
});


Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');





