<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
//clientesuse App\Http\Controllers\Grupo;
use App\Models\Clientes;
use App\models\Grupo;
use App\models\Pdvitens;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = clientes::paginate();
        return view('clientes.listarClientes' , compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = clientes::create($request->all());
        return redirect()->route('Clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientesController  $clientesController
     * @return \Illuminate\Http\Response
     */
    public function show(ClientesController $clientesController)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientesController  $clientesController
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientesController $clientesController)
    {
        return 'estou na edit clientes';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientesController  $clientesController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientesController $clientesController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientesController  $clientesController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientesController $clientesController)
    {
        //
    }

    public function buscarCliente($id)
    {
    //    dd($id);
    $clientes = clientes::find($id);

    if(!$clientes->id){
        return 'nao e cliente'; //redirect()-route('listarTudo');
    };

     //  
      // dd($clientes->nome, $clientes->id);
        return view('pdv.inserirNovaVenda', compact('clientes'));
    }

    // buscar o cliente ja cadastrado para inserir produtos na venda
    public function buscarClientesPdv(Request $request, $id){

   
        //$dados = clientes::where('id',$aa )->first();

        $clientes = clientes::get()->where('id', '=' , $id );
        //dd($clientes);
        $grupos = grupo::get();
        $pdvitens = pdvitens::where('id_cliente', '=', $id)->get();
            
       return view('pdv.pdv' , compact('clientes', 'grupos', 'pdvitens') );

    }
}
