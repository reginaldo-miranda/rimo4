<?php

namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $produtos;
     public $grupo;

     public function __constuct(){

       $grupo = grupo::get();
       return view('produtos.grupos.selecionar', compact('grupo'));
     }
 
    public function index()
    {
        $produtos = produto::paginate(15);

        
      //  dd($produtos);

        return view('produtos.listarProdutos', compact('produtos'));
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
      // dd($request->all());

        $produtos = produto::create($request->all());

        // return view('produtos.listarProdutos');
         
         return redirect()->route('listarTudo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       if(!$produto = produto::find($id)){
           return redirect()-route('listarTudo');
       };
        
       return view('produtos.cadastro', compact('produto'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      // dd($id);
       if(!$produtos = produto::find($id)){
            return redirect()-route('listarTudo');
        };
          $produtos->delete();
      
        return 'apagado ';
    }
}
