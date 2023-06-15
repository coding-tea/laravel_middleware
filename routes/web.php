<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//JournalIpClient is middleware that save client ip in laravel log
Route::get('/', function(){
    return view('home');
})->middleware('JournalIpClient');

//route return login view
Route::get('/login', function(){
    return view('login');
})->name('login');

//route handel login form 
//we have one user and the username and password is admin
Route::post('/login', function(Request $request){
    if($request->username == 'admin' && $request->password == 'admin')
    return redirect()->route('dashboard')->with([
        'auth' => 'true'
    ]);
});

//dashbordAccessMiddleware is middleware that check if user is connected or not if not redirect the user to the login page
//route return dashboard view
route::get('/dashboard', function(){
    session()->put('time', time());
    return view('dashboard');
})->middleware('dashbordAccessMiddleware')->name('dashboard');