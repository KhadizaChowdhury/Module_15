<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/reg', [RegController::class, 'reg'] );

Route::get( '/login', function () {
    return view( 'login' );
} );

Route::get( '/dashboard', function () {
    return view( 'dashboard' );
} );

Route::get( '/404', function () {
    return view( '404' );
} );

Route::get( '/home', function () {
    return Redirect::to( 'dashboard', 302 );
} );

// Route::get( '/hello-body', [HelloController::class, 'helloBody'] );
// Route::get( '/hello-body-string', [HelloController::class, 'helloBodyString'] );
// Route::get( '/hello-header', [HelloController::class, 'helloHeader'] );

Route::middleware( [AuthMiddleware::class] )->group( function () {
    Route::get( '/profile/{token}', [ProfileController::class, 'index'] );
    Route::get( '/settings/{token}', [SettingsController::class, 'index'] );
} );

Route::get( '/contact', ContactController::class );
Route::resource('post', PostController::class);
Route::resource('product', ProductController::class);



