<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
//use App\Http\Controllers\Clientes;
//use App\Http\ControllersClientesController;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Grupo;

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

 // Route::get('pdv', [PdvController::class, 'create'])->name('pdv');
 // Route::get('/selecionarpdv', [PdvController::class,'show'])->name('selecionarpdv');
 // funcionando  Route::post('selecionarpdv', [PdvController::class,'show'])->name('selecionarpdv');
 // rs Route::get('abrirvenda.index' , [PdvController::class, 'index' ] )->name('abrirVenda.index');
// Route::post('gravar' ,  [PdvController::class, 'store'])->name('gravar.store');

 Route::resource('pdv', PdvController::class);

 /*---------------------------------------------------------------------*/

 /*--------------------------pdv itens ------------------------------*/

 Route::get('prodescolhido/{id}', [PdvitensController::class,'escolherprod'])->name('prodescolhido');
 Route::get('acrescentar' , [PdvitensController::class , 'acrescentar'])->name('acrescentar');


 /*--------------------------- fim pdv itens ----------------------------*/

 /* ------------------------ produtos --------------------------------*/
/*
Route::get('/produtos', function(){
    return view('produtos.cadastro');
})->name('produtos');
*/
Route::get('/cadastro' , function() {
    return view('produtos.cadastro');
})->name('cadastro');


// Route::post('produtos', [App\Http\Controllers\ProdutoController::class,'store'])->name('prod_cadastro');
// res Route::post('produtos', [ProdutoController::class,'store'])->name('prod_cadastro');
// res Route::get('listarTudo', [ProdutoController::class, 'index'])->name('listarTudo');
// res Route::get('show/{id}', [ProdutoController::class,'show'])->name('show');
// res  Route::delete('apagar/{id}', [ProdutoController::class,'destroy'])->name('apagar');
Route::resource('produtos', ProdutoController::class);

/* -------------------------------------------------------------------*/

/*------------------------ grupo de produtos -------------------------*/


Route::get('/grupov' , function(){
    return view('produtos.grupos.cadastro');
})->name('grupov');
/*
Route::post('grupo', [GrupoController::class, 'store'])->name('prod_grupo');
Route::get('listarGrupo', [GrupoController::class, 'index'])->name('listar_grupo');
*/
Route::get('selecionar',[GrupoController::class, 'selecionar'])->name('selecionar');
Route::resource('grupo' , GrupoController::class);
/*----------------------------------------------------------------------*/

/*---------------------------- Clientes --------------------------------*/
/*
Route::get('clientes',[ClientesController::class, 'create'])->name('clientes');
Route::post('clientes-store', [ClientesController::class, 'store'])->name('clientes-store');
Route::get('listarClientes.index',[ClientesController::class, 'index' ])->name('listarClientes.index');
Route::get('buscarCliente/{id}' ,[ClientesController::class, 'buscarCliente'])->name('buscarCliente'); */
//Route::resource('Clientes', 'App\Http\ControllersClientesController');
 Route::resource('Clientes', ClientesController::class);
 Route::get('buscarCliente/{id}' ,[ClientesController::class, 'buscarCliente'])->name('buscarCliente'); 


/*https://www.youtube.com/watch?v=tWI-x7gCwYg&t=142s link de rotas 

Route::resource([
   'Clientes' => 'ClientesController::class',
   'Grupo'    => 'GrupoController::class',
   'Produtos' => 'ProdutoController::class'

]);
/*-----------------------------------------------------------------------*/