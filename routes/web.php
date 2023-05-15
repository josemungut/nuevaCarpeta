<?php

use App\Http\Controllers\contactoController;
use App\Http\Controllers\frutasController;
use App\Http\Controllers\landingcontroller;
use App\Http\Controllers\ProfileController;
use App\Models\entrenador;
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
    $profesores=entrenador::all();
    $url = 'storage/';
    return view('welcome')->with('profesores',$profesores)->with('url', $url);;
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

Route::get('actividades', function () {
    return view('actividades');
})->name('actividades');


Route::get('instalaciones', function () {
    return view('instalaciones');
})->name('instalaciones');



Route::prefix('fruteria')->group(function () {
    Route::get('/frutas', [frutasController::class, 'index'])->name('frutas');
    Route::post('/frutas', [frutasController::class, 'datos'])->name('postfrutas');
    Route::get('naranjas/{i}', [frutasController::class, 'naranjas'])->name('naranjas');
    Route::get('peras', [frutasController::class, 'peras'])->name('peras');
});



Route::get('contactos/{nombre}/{edad}', [contactoController::class, 'index'])->name('contactos')->middleware('mayor:10');
Route::resource('landing', landingcontroller::class);



Route::get('datos', function () {
    return view('miapp.datos');
})->name('datos')->middleware('auth');



require __DIR__ . '/auth.php';
