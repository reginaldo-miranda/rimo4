<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
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
/*  esta esta funcionando

    public function prodescolhido(Request $request, $id){

       //dd($id);

       $value = $request->session()->pull('$id_cli');
       //dd($value);
       
        $produtos = produto::find($id);
        dd($produtos) ;
        
       
       $pdvitens = pdvitens::create([

        'id_cliente' => $value,
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
       // dd($value);

       $clientes = clientes::where('id', '=', $value)->get();
       // $clientes = clientes::get(); 
       // dd($clientes);
       // return view('pdv.listarProdEscolhido', compact('pdvitens'));
        
        $totalv = DB::select("SELECT SUM(qde * vunit) as totalve
        FROM pdvitens WHERE id_cliente = $id;");

       // $request->session()->reflash();
       $request->session()->forget('$id_cli');
       // $request->session()->flush();
   
       return view('pdv.pdv', compact('grupos', 'produtos', 'pdvitens', 'clientes', 'totalv'));

      
    }*/

    public function acrescentar(Request $request, $id){
     
        $value = $request->session()->pull('id_cli');

        $nclie = $value;
       // dd($nclie);


       // $produtos = produto::find($id)->first();
      //  dd($produtos->id) ;
      /*
            $pdvitens = DB::table('pdvitens')
            ->select('pdvitens.*')
            ->where('id_cliente', '=', $value )
            ->Where('id_produto', '=' , $id   )->get();
             
            $qtde = $pdvitens->qde+1; 
            dd($qtde);

            DB::table('my_table')
   ->where('rowID', 1)
   ->update([
       'column1' => DB::raw('column1 + 2'),
       'column2' => DB::raw('column2 + 10'),
       'column3' => DB::raw('column3 + 13'),
       'column4' => DB::raw('column4 + 5'),
   ]);
            
   --------------------------
   DB::table('my_table')
->where('rowID', 1)
->increment('column1', 2)
->increment('column2', 10)
->increment('column3', 13)
->increment('column4', 5);


   */  

   $pdvitens = pdvitens::get()->first(); 
 $teste =  DB::table('pdvitens')->where('id_cliente', $value)->increment('qde',1);
  dd($teste)        ;
            
       /* $pdvitens =  DB::table('pdvitens')->increment('qde', 1 ,['id_cliente' => $nclie]);
        ;

          // DB::table('users')->increment('votes', 1, ['name' => 'John']);
    /*
            $pdvitens = pdvitens::where('id_cliente', $value)
                    ->where('id_produto', $id)    
                    ->update(['qde' => $qtde] );*/

       return redirect()->back();
       //return redirect()->route('pdv.index');
    }


     public function prodescolhido(Request $request, $id){

        //dd($id);
 
        $value = $request->session()->pull('id_cli');
     //  dd($value);
        
         $produtos = produto::find($id);
        // dd($produtos) ;

        $pdvitens = DB::table('pdvitens')
        ->select('pdvitens.*')
        ->where('id_cliente', '=', $value )
        ->Where('id_produto', '=' , $id   )->get();
       // dd($pdvitens) ;
      

        
      if  ($pdvitens->isEmpty()) {   
        // dd($pdvitens); 
          
            $pdvitens = pdvitens::create([
        
            'id_cliente' => $value,
            'id_produto' => $id,
            'vunit'      => $produtos->pvenda,
            'qde'        => $produtos->qde,
            'vtotal'     => '10',
            'unid'       => $produtos->un,  
            ]);
          
    }else{
        dd('ja cadastrado');
        
        return redirect('$value')->back();
      
    }


 
         $grupos = grupo::get();
        // dd($value);
 
        $clientes = clientes::where('id', '=', $value)->get();
        // $clientes = clientes::get(); 
        // dd($clientes);
        // return view('pdv.listarProdEscolhido', compact('pdvitens'));

          // $pdvitens = pdvitens::get();

          $pdvitens = DB::table('pdvitens')
          ->select('pdvitens.*', 'produtos.descricao')
          ->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')
          ->where('id_cliente' , '=' , $value)->get();
          //dd($pdvitens);
         
         $totalv = DB::select("SELECT SUM(qde * vunit) as totalve
         FROM pdvitens WHERE id_cliente = $value;");
 
        // $request->session()->reflash();
         $request->session()->forget('id_cli');
        // $request->session()->flush();
    
        return view('pdv.pdv', compact('grupos', 'produtos', 'pdvitens', 'clientes', 'totalv'));
 
       
     }
}

/*
$produtos = DB::table('pdvitens')
->select('pdvitens.*', 'produtos.descricao')
->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')->where('status', '=', 1)->get();
*/






