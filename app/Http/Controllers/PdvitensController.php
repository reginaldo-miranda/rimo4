<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use App\Models\pdvitens;
use App\Models\pdv;
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


    public function acrescentar(Request $request, $id){
     
        $value = $request->session()->pull('id_cli');

        $nclie = $value;
       // dd($nclie);

       $teste = pdvitens::where('id_cliente', $value)
             ->where('id_produto', $id)
             ->increment('qde', 1);
 
        //dd($teste) ;

        
        $totalv = DB::select("SELECT SUM(qde * vunit) as totalve
        FROM pdvitens WHERE id_cliente = $value;");
       // dd($totalv->totalve);

       foreach ($totalv as $tod){
         
         $tt = $tod->totalve;
        
       };

                
        $pdv = pdv::where('id_clientes', $value)
        ->update(['vtotal'=> $tt]);
        
       return redirect()->back();
      
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
            'qde'        => $request->qde,
            'vtotal'     => '0',
            'unid'       => $produtos->un,  
            ]);
          
            }else{
                dd('ja cadastrado');
                
                return redirect('$value')->back();
            
            };
          
            $grupos = grupo::get();
            // dd($value);
        
            $clientes = clientes::where('id', '=', $value)->get();
           

            $pdvitens = DB::table('pdvitens')
            ->select('pdvitens.*', 'produtos.descricao')
            ->join('produtos', 'produtos.id', '=', 'pdvitens.id_produto')
            ->where('id_cliente' , '=' , $value)->get();
            //dd($pdvitens);
            
            $totalv = DB::select("SELECT SUM(qde * vunit) as totalve
            FROM pdvitens WHERE id_cliente = $value;");
           // dd($totalv->totalve);

           foreach ($totalv as $tod){
             
             $tt = $tod->totalve;
            
           };

                    
            $pdv = pdv::where('id_clientes', $value)
            ->update(['vtotal'=> $tt]);

            // $request->session()->reflash();
            $request->session()->forget('id_cli');
            // $request->session()->flush();

            return view('pdv.pdv', compact('grupos', 'produtos', 'pdvitens', 'clientes', 'totalv'));
        
            
     }
}








