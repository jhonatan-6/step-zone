
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Productos;
use App\Models\Juguete;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/step-zone', function () {
    return view('inicio');
});


Route::get('/login', [LoginController::class, 'mostrarLogin']);


Route::post('/login', [LoginController::class, 'ingresar']);


Route::post('/logout', [LoginController::class, 'salir'])
    ->middleware('auth');


Route::get('/panel', function () {
    $productos = Productos::all();

    return view('panel', ['productos' => $productos]);
})->middleware('auth');





Route::get('/juguetes', function () {
    $juguetes = Juguete::all();

    return view('juguetes.index', compact('juguetes'));
});

Route::get('/juguetes/nuevo', function () {
    return view('juguetes.nuevo');
});

Route::post('/juguetes/nuevo', function () {
    $datos = request()->validate(
        [
            'nombre' => 'required',
            'precio' => 'required|integer',
        ],
        [
            'nombre.required' => 'Pone el nombre del juguete.',
            'precio.required' => 'Pone el precio del juguete.',
            'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
        ]
    );

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/juguetes');
});
