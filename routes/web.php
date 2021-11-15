<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes teste
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('menu.menuPrincipal');
});

Route::get('/pdv' , function() {
    return view('pdv.pdv');
})->name('pdv');

Route::get('/cadastro' , function() {
    return view('produtos.cadastro');
})->name('cadastro');



/* ------------------------ produtos --------------------------------*/
Route::get('/produtos', function(){
    return view('produtos.cadastro');
})->name('produtos');

//Route::post('produtos', [App\Http\Controllers\ProdutoController::class,'store'])->name('prod_cadastro');
Route::post('produtos', [ProdutoController::class,'store'])->name('prod_cadastro');

Route::get('listarTudo', [ProdutoController::class, 'index'])->name('listarTudo');
Route::get('edit{$id}', [ProdutoController::class, 'edit'])->name('editarProd');

/* -------------------------------------------------------------------*/