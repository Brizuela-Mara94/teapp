<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/index/tea', function () {
    return view('tea');
})->name('index.tea');
Route::get('/index/nosotros', function () {
    return view('nosotros');
})->name('index.nosotros');
Route::get('/index/login', function () {
    return view('auth.login');
})->name('index.login');

Route::middleware('permission:see-panel')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/pull-events', [EventController::class, 'pullEvents'])->name('pull-events');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('patients', PatientController::class)->middleware('auth');

});

// Rutas de la aplicación del contador
