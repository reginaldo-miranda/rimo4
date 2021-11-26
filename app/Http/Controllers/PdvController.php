<?php

namespace App\Http\Controllers;

use App\Models\Pdv;
use App\Models\Grupo;
use App\Models\Produto;
use App\Models\pdvitens;
use App\Models\Clientes;
use Illuminate\Http\Request;
use DB;

class PdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $produtos;
    public $grupo;
    public $valorescolhido, $escolha, $teste;


  /* public function __constuct(){

      $grupo = grupo::get();
      return view('produtos.grupos.selecionar', compact('grupo'));
    }
*/


    public function index()
    {
       // $pdv = pdv::get();
     //   return view('pdv.abrirVenda' , compact('pdv'));

        $pdv = DB::table('pdvs')
        ->select('pdvs.*', 'clientes.nome')
        ->join('clientes', 'clientes.id', '=', 'pdvs.id_clientes')->get();
       //dd($pdv);
/*
       $pdvitens = DB::table('pdvitens')
       ->select('pdvitens.*', 'produtos.descricao')
       ->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')->get();
      // dd($pdvitens); */



       return view('pdv.abrirVenda' , compact('pdv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       $produtos = produto::get();
       $grupo    = grupo::get();
      // $pdvitens = pdvitens::get();

       $pdvitens = DB::table('pdvitens')
       ->select('pdvitens.*', 'produtos.descricao')
       ->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')->get();

     
      return view('pdv.pdv', compact('grupo', 'produtos', 'pdvitens'));
  //    return redirect()->route('selecionarpdv');


/* -------------------exemplo ----------------------
$produtos = Produto::when(Request::input('produto'),function($query){
    $query->where('nome_produto',Request::input('produto'));
})
->when(Request::input('preco'),function($query){
    $query->where('preco_produto',Request::input('preco'));
})
->when(Request::input('categoria'), function($query){
    $query->whereHas('categoria', function ($query) {
        $query->where('nome_categoria',Request::input('categoria'));
    });
})->get();


----------------------------------*/
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pdv  $pdv
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
     {
 
       // $dados = $request->all();
       $dados = $request->grupo;
       // dd($dados);
       
      $produtos = produto::get()->where('grupo', '=', $dados);
    
       
       return view('pdv.listarProdPdv' ,compact('produtos'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pdv  $pdv
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdv $pdv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pdv  $pdv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pdv $pdv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pdv  $pdv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdv $pdv)
    {
        //
    }
   
}
