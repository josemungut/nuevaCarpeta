<?php

use App\Http\Controllers\actividadesController;
use App\Http\Controllers\claseController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\frutasController;
use App\Http\Controllers\instalacionesController;
use App\Http\Controllers\landingcontroller;
use App\Http\Controllers\ProfileController;
use App\Models\entrenador;
use App\Models\informacionlandingpage;
use App\Http\Controllers\salaController;

use App\Models\instalaciones;
use App\Models\sala;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $profesores = entrenador::all();
    $url = 'storage/';
    return view('welcome')->with('profesores', $profesores)->with('url', $url);;
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');


Route::get('politicas-de-cookies', function () {
    return view('politicas-de-cookies.index');
})->name('politicas-de-cookies');

Route::get('politicas-de-privacidad', function () {
    return view('politicas-de-privacidad.index');
})->name('politicas-de-privacidad');

Route::get('aviso-legal', function () {
    return view('aviso-legal.index');
})->name('aviso-legal');



// Route::get('instalaciones', function () {
//     $profesores = instalaciones::all();
//     $url = 'storage/';
//     return view('instalaciones.index')->with('hola',$profesores)->with('url',$url);
// })->name('instalaciones');


Route::get('landing', function () {
    $profesores = informacionlandingpage::all();
    $url = 'storage/';
    return view('landing')->with('hola', $profesores)->with('url', $url);;
});

Route::resource('instalaciones', instalacionesController::class)->middleware(['auth','verified']);
Route::resource('actividades', actividadesController::class)->middleware(['auth','verified']);


require __DIR__ . '/auth.php';
