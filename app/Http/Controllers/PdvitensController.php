<?php

namespace App\Http\Controllers;

use App\Models\pdvitens;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Grupo;
use DB;

class PdvitensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function escolherprod($id){

     //  dd($id);
       $produtos = produto::find($id);
      // dd($produtos) ;

       $pdvitens = pdvitens::create([

        'id_cliente' => '1' ,
        'id_produto' => $produtos->id,
        'vunit'      => $produtos->pvenda,
        'qde'        => '1',
        'vtotal'    => '10',
        'unid'      => 'un',  
       ]);

       // $pdvitens = pdvitens::get();
       $pdvitens = DB::table('pdvitens')
      ->select('pdvitens.*', 'produtos.descricao')
      ->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')->get();
     // dd($pdvitens);

        $grupo = grupo::get();
       // return view('pdv.listarProdEscolhido', compact('pdvitens'));
        return view('pdv.pdv', compact('grupo', 'produtos', 'pdvitens'));
    }

     public function acrescentar(){
     
        return 'estou na acrescentar';

     }
}

/*
$produtos = DB::table('pdvitens')
           
->select('pdvitens.*', 'produtos.descricao')
->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')->where('status', '=', 1)->get();
*/