<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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


/*------------------------ PDV -------------------------------------*/

Route::get('pdv', [PdvController::class, 'create'])->name('pdv');
//Route::get('/selecionarpdv', [PdvController::class,'show'])->name('selecionarpdv');

 Route::post('selecionarpdv', [PdvController::class,'show'])->name('selecionarpdv');
 
 Route::get('prodescolhido/{id}', [PdvitensController::class,'escolherprod'])->name('prodescolhido');

 Route::get('acrescentar' , [PdvitensController::class , 'acrescentar'])->name('acrescentar');

 Route::get('abrirvenda.index' , [PdvController::class, 'index' ] )->name('abrirVenda.index');

 Route::post('gravar' ,  [PdvController::class, 'store'])->name('gravar.store');

 /*---------------------------------------------------------------------




/* ------------------------ produtos --------------------------------*/
/*
Route::get('/produtos', function(){
    return view('produtos.cadastro');
})->name('produtos');
*/
Route::get('/cadastro' , function() {
    return view('produtos.cadastro');
})->name('cadastro');


//Route::post('produtos', [App\Http\Controllers\ProdutoController::class,'store'])->name('prod_cadastro');
Route::post('produtos', [ProdutoController::class,'store'])->name('prod_cadastro');

Route::get('listarTudo', [ProdutoController::class, 'index'])->name('listarTudo');

Route::get('show/{id}', [ProdutoController::class,'show'])->name('show');

Route::delete('apagar/{id}', [ProdutoController::class,'destroy'])->name('apagar');



/* -------------------------------------------------------------------*/

/*------------------------ grupo de produtos -------------------------*/


Route::get('/grupo' , function(){
    return view('produtos.grupos.cadastro');
})->name('grupo');

Route::post('grupo', [GrupoController::class, 'store'])->name('prod_grupo');
Route::get('listarGrupo', [GrupoController::class, 'index'])->name('listar_grupo');

Route::get('selecionar',[GrupoController::class, 'selecionar'])->name('selecionar');

/*----------------------------------------------------------------------*/

/*---------------------------- Clientes --------------------------------*/

Route::get('clientes',[ClientesController::class, 'create'])->name('clientes');

Route::post('clientes-store', [ClientesController::class, 'store'])->name('clientes-store');
Route::get('listarClientes.index',[ClientesController::class, 'index' ])->name('listarClientes.index');
Route::get('buscarCliente/{id}' ,[ClientesController::class, 'buscarCliente'])->name('buscarCliente');
//Route::resource('Clientes', 'App\Http\ControllersClientesController');

/*Route::resource('Clientes', 'ClientesController::class');
https://www.youtube.com/watch?v=tWI-x7gCwYg&t=142s link de rotas

Route::resource([
   'Clientes' => 'ClientesController::class',
   'Grupo'    => 'GrupoController::class',
   'Produtos' => 'ProdutoController::class'

]);
/*-----------------------------------------------------------------------*/