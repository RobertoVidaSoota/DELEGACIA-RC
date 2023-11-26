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

// --- INDICE ---
// 
// ÁREA RESTRITA DO SISTEMA
// - ROTAS DE PÁGINAS


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
// Route::middleware("auth:admin")->group(function(){
   
    // ROTAS DE PÁGINAS
    Route::get('/inicio', function(){
        return Inertia::render("AppModule/Inicio");
    });
    Route::get('/apreencoes', function(){
        return Inertia::render("AppModule/Apreencoes/Apreencoes");
    });
    Route::get('/casos', function(){
        return Inertia::render("AppModule/Casos/Casos");
    });
    Route::get('/configuracoes', function(){
        return Inertia::render("AppModule/Configuracoes/Configuracoes");
    });
    Route::get('/denuncias', function(){
        return Inertia::render("AppModule/Denuncias/Denuncias");
    });
    Route::get('/equipamento', function(){
        return Inertia::render("AppModule/Equipamento/Equipamento");
    });
    Route::get('/equipe', function(){
        return Inertia::render("AppModule/Equipe/Equipe");
    });
    Route::get('/ocorrencias', function(){
        return Inertia::render("AppModule/Ocorrencias/Ocorrencias");
    });
    Route::get('/relatorios', function(){
        return Inertia::render("AppModule/Relatorios/Relatorios");
    });
    Route::get('/veiculos', function(){
        return Inertia::render("AppModule/Veiculos/Veiculos");
    });
// });
