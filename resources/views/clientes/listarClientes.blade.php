@extends('layout')


<h1>Listagem de Cliente</h1>

<div>
  
  <a href="{{ route('Clientes.create')}}">Cadastrar</a>
</div><br>

@foreach ($clientes as $clie)
  <div>
        <tr>
                 
            <td>{{ $clie->id }}</td>
            <td>{{ $clie->nome }}</td>
            <td>{{ $clie->fone1 }}</td>
           
           <td>
              @csrf
                <a href="{{ route('Clientes.edit', $clie->id) }}">
                  <button id="btneditar" >Editar</button> 
                </a> 
            </td>
            <td>
                <a href="#">
                   <button id="btndeletar" >Deletar</button> 
                </a> 
            </td>
            <td>    
                <form action="{{ route('buscarCliente' , $clie->id ) }}" method="get">
                   @csrf
                   {{--   <input type="hidden" name="_method" value="DELETE"> --}}
        
                   <button id="btndeletar" type="submit">Selecionar</button>
                 </form> 
                 
             </td>
         </tr>
   
  </div>
  
@endforeach

{{ $clientes->links() }}