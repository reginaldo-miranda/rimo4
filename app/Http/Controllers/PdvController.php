<?php

namespace App\Http\Controllers;

use App\Models\Pdv;
use App\Models\Grupo;
use App\Models\Produto;
use Illuminate\Http\Request;

class PdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $produtos;
    public $grupo;
    public $valorescolhido, $escolha;


   /* public function __constuct(){

      $grupo = grupo::get();
      return view('produtos.grupos.selecionar', compact('grupo'));
    }*/



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
        $produtos = produto::get();
        $grupo    = grupo::get();
      //  $escolha = $_POST[$valorescolhido];

       // $pprodutos = produto::where('grupo','escolha')->get();
       // $frprodutos = $pprodutos->fseekfresh();

        return view('pdv.pdv' ,compact('grupo', 'produtos'));

        //return redirect()->route('show', ['id' => 1]);
        //return redirect()->route('profile', ['id' => 1]);
        //return redirect()->route('profile', [$user]);


        //$flight = Flight::where('number', 'FR 900')->first();

        //$freshFlight = $flight->fresh();

/* -------------------exemplo ----------------------*/
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


/*----------------------------------*/






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
    public function show(Request $pdv)
    {
        dd($pdv->id);
      return 'estou aqui na show';

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
