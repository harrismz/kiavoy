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

// Route::get('/', function () {
//     if(!Auth::check()){
//         return redirect('/admin/login');
//     }
//     return redirect('/');
//     // return redirect()->intended('/');
//     // return Auth::check() ? 'Authenticated' : 'Not Authenticated';
// });

Route::get('/check-auth', function(){
    return Auth::check()? 'Authenticated' : 'Not Authenticated';
});



// if(Auth::check()){
//     Route::get('/',function(){});
// }
// else{
//     Route::redirect('/', '/admin/login', 301);
// }


// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::post('/login', [CustomLoginController::class, 'login']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    // Route::get('/login',function (){
    //     return view('vendor.voyager.login');
    // });
    // Route::post('login', [CustomLoginController::class, 'login']);
});

Auth::routes();

Route::view('/{any}', 'welcome')->where('any', '.*')->middleware('auth');
