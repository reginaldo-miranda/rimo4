<?php

namespace App\Http\Controllers;

use App\Models\pdvitens;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Grupo;
use App\Models\Clientes;
use DB;

class PdvitensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $qtde;
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //
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
     * @param  \App\Models\pdvitens  $pdvitens
     * @return \Illuminate\Http\Response
     */
    public function show(pdvitens $pdvitens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pdvitens  $pdvitens
     * @return \Illuminate\Http\Response
     */
    public function edit(pdvitens $pdvitens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pdvitens  $pdvitens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pdvitens $pdvitens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pdvitens  $pdvitens
     * @return \Illuminate\Http\Response
     */
    public function destroy(pdvitens $pdvitens)
    {
        //
    }

    public function escolherprod(Request $request, $id){

      //dd($id);
       $produtos = produto::find($id);
      // dd($produtos) ;

       $pdvitens = pdvitens::create([

        'id_cliente' => '1' ,
        'id_produto' => $produtos->id,
        'vunit'      => $produtos->pvenda,
        'qde'        => $request->qde,
        'vtotal'    => '10',
        'unid'      => $produtos->un,  
       ]);

       // $pdvitens = pdvitens::get();
       $pdvitens = DB::table('pdvitens')
      ->select('pdvitens.*', 'produtos.descricao')
      ->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')->get();
      //dd($pdvitens);

        $grupos = grupo::get();
        $clientes = clientes::get();
      //  dd($cliente);
     //   return view('pdv.listarProdEscolhido', compact('pdvitens'));
        
       return view('pdv.pdv', compact('grupos', 'produtos', 'pdvitens', 'clientes'));

      
    }

     public function acrescentar($id){
     
        //dd($id);
        $pdvitens = pdvitens::findOrFail($id);

        $qtde = $pdvitens->qde+1;
 /*
       // dd($qtde);
         $pdvitens = pdvitens::findOrFail($id)->update([
            'qde' => $qtde,
         ]);
        */

        $pdvitens = pdvitens::findOrFail($id)->update([
            'qde' =>  $pdvitens->qde+1,
         ]);
        
        // return redirect()->route('buscarClientePdv/{id}');
        return redirect()->back();

     }
}

/*
$produtos = DB::table('pdvitens')
           
->select('pdvitens.*', 'produtos.descricao')
->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')->where('status', '=', 1)->get();
*/