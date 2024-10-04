<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('permission:see-panel')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/pull-events', [EventController::class, 'pullEvents'])->name('pull-events');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

// Rutas de la aplicación del contador
Route::get('/contador', function () {
    $numero = 5;
    return view('contador', compact('numero'));
})->name('contador');

Route::get('/contador/incrementar/{numero}', function ($numero) {
    if ($numero >= 0 && $numero < 10) {
        $numero++;
    } else {
        $mensaje = "El contador no puede ser mayor a 10";
        return view('contador', compact('numero', 'mensaje'));
    }
    return view('contador', compact('numero'));
})->name('contador.incrementar');

Route::get('/contador/decrementar/{numero}', function ($numero) {
    if ($numero > 0) {
        $numero--;
    } else {
        $mensaje = "El contador no puede ser menor a 0";
        return view('contador', compact('numero', 'mensaje'));
    }
    return view('contador', compact('numero'));
})->name('contador.decrementar');

Route::get('/contador/reiniciar', function () {
    $numero=5;
    return view('contador', compact('numero'));
})->name('contador.reiniciar');

Route::get('/contador/duplicar/{numero}', function ($numero) {
    $numero = $numero * 2;
    return view('contador', compact('numero'));
})->name('contador.duplicar');

Route::post('/contador/restablecer', function () {
    $numero = request('valor', 5);
    $numero = max(0, min($numero, 10));
    return view('contador', compact('numero'));
})->name('contador.restablecer');
