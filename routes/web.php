<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// LOGIN DO USUARIO
Route::get('/', function () {
    return Inertia::render("Login");
})->name("login");

// SAIR DA CONTA
Route::get("/logout-user", function(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->to("/");
});



// ==== ÁREA RESTRITA DO SISTEMA ====
Route::middleware("auth:admin")->group(function(){
    
    Route::get('/inicio', function(){
        return Inertia::render("AppModule/Login");
    });
});
