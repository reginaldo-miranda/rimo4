<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

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
        return redirect()->route('listarClientes');
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
        //
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
        dd($id);
        return 'buscar cliente';
    }
}
