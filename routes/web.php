<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\CustomLoginController;

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

// Route::get('/', function () {
//     return view('app');
// })
// ->name('application');

Route::get('/check-auth', function () {
    return Auth::check() ? 'Authenticated' : 'Not Authenticated';
});

Auth::routes();

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::post('/login', [CustomLoginController::class, 'login']);

Route::redirect('/login', '/admin/login');

Route::group(['prefix' => 'admin',
    'middleware' => 'auth'], function () {
    Voyager::routes();
    // Route::post('login', [CustomLoginController::class, 'login']);
});

Route::view('/{any}', 'welcome')->where('any', '.*')->middleware('auth');
