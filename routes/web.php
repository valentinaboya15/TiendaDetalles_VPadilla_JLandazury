<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\InformacionController;


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

//seccion administracion

Route::get('/', [AdministracionController::class, 'getindex']);

Route::get('Administracion/administracion', [AdministracionController::class, 'getadministracion']);

Route::get('Administracion/login', [AdministracionController::class, 'getlogin']);


//seccion informacion
Route::get('informacion/nosotros', [InformacionController::class, 'getnosotros']);

Route::get('informacion/mision', [InformacionController::class, 'getmision']);

Route::get('informacion/ubicacion', [InformacionController::class, 'getubicacion']);

Route::get('contactos', [InformacionController::class, 'getcontactos']);

Route::get('PQR', [InformacionController::class, 'getPQR']);

//seccion catalogo

Route::get('catalogo/desayunos', [CatalogoController::class, 'getdesayunos']);

Route::get('catalogo/flores', [CatalogoController::class, 'getflores']);

Route::get('catalogo/frutales', [CatalogoController::class, 'getfrutales']);

Route::get('catalogo/anchetas', [CatalogoController::class, 'getanchetas']);
//Route::get('catalogo/anchetas/{id_pro}', [CatalogoController::class, 'getanchetas'])->name('detalle_ancheta');

Route::get('categorias/listado', [CatalogoController::class, 'getcategoria']);

//seccion carrito
Route::get('carrito/carro', [CarritoController::class, 'getcarro']);

//seccion clientes
Route::get('clientes/visualizar/cliente', [ClientesController::class, 'getclientes'])->name('listado_clientes');
Route::get('clientes/listado', [ClientesController::class, 'listado_clientes'])->name('listado_clientes');
Route::get('clientes/registrar', [ClientesController::class, 'formularioReg'])->name('formularioReg');
Route::post('clientes/registrar', [ClientesController::class, 'registrarCli'])->name('registrarCliente'); 
//seccion facturacion
Route::get('facturacion/factura', [FacturacionController::class, 'getfactura']);
