
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Productos;
use App\Models\Juguete;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


Route::get('/step-zone', function () {
    return view('inicio');
})->middleware('auth');


Route::get('/login', [LoginController::class, 'mostrarLogin'])->name('login');


Route::post('/login', [LoginController::class, 'ingresar']);


Route::post('/logout', [LoginController::class, 'salir'])
    ->middleware('auth');


Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/productos', function () {
    $productos = Productos::all();

    return view('panel', ['productos' => $productos]);
})->middleware('auth');




Route::get('/registrar_producto', function () {
    return view('registrar_producto');
});

Route::post('/registrar_prodcuto_nuevo', function () {
    $datos = request()->validate(
        [
            'categoria_id' => 'required|integer',
            'marca' => 'required',
            'nombre' => 'required',
            'precio_compra' => 'required|integer',
            'precio_venta' => 'required|integer',
        ],
        [
            'categoria_id.required' => 'ingrese la categoria',
            'marca.required' => 'ingrese la marca',
            'nombre.required' => 'ingrese el nombre',
            'precio_compra.required' => 'ingrese el precio de compra',
            'precio_venta.required' => 'ingrese el precio de venta',

        ]
    );

    Productos::create([
        'categoria_id' => request()->input('categoria_id'),
        'marca' => request()->input('marca'),
        'nombre' => request()->input('nombre'),
        'descripcion' => request()->input('descripcion'),
        'precio_compra' => request()->input('precio_compra'),
        'precio_venta' => request()->input('precio_venta'),
        'imagen' => request()->input('imagen'),
    ]);

    return redirect('/productos');
});








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
            'stock' => 'required|integer|min:0',
        ],
        [
            'nombre.required' => 'Pone el nombre del juguete.',
            'precio.required' => 'Pone el precio del juguete.',
            'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
            'stock.required' => 'Debes ingresar el stock del juguete.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock no puede ser negativo.',
        ]
    );

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
        
    ]);

    return redirect('/juguetes');
});
