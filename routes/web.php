<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

// PASO 5 - DEFINIR UNA RUTA
Route::get('home', function () {
    return View('home');
})->name('home');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('nosotros', 'nosotros')->name('about');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::get('personal', [PersonalController::class, 'personal'])->name('personal');

Route::get('modelos', ModeloController::class)->name('models'); //Para ejecutar el controlador al usar una ruta
//                                             El nonbre de la ruta

// PASAR PARAMETROS A LA ROUTE
Route::get('contactos/{name?}', [ContactoController::class, 'dataContact'])->name('contact');
//                               Llama al controlador       Llama a la funcion de controlador

Route::resource('autos', AutoController::class)->except('index','show');


