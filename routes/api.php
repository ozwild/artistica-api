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

Route::resource('accounts', 'AccountController')
    ->names([
        'show' => 'accounts.show',
        'update' => 'accounts.update',
        'store' => 'accounts.store',
        'delete' => 'accounts.delete'
    ]);

Route::group([
    'prefix' => 'users'
], function () {
    Route::get('', 'UserController@index');
});

/* Route::resource('users', 'UserController')
    ->names([
        'show' => 'users.show',
        'update' => 'users.update',
        'store' => 'users.store',
        'delete' => 'users.delete'
    ]); */

Route::resource('listings', 'ListingController')
    ->names([
        'show' => 'listings.show',
        'update' => 'listings.update',
        'store' => 'listings.store',
        'delete' => 'listings.delete'
    ]);
