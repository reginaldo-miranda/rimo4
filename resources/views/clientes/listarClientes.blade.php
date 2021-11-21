@extends('layout')


<h1>Listagem de Cliente</h1>

@foreach ($clientes as $clie)
  <div>
        <tr>
                 
            <td>{{ $clie->id }}</td>
            <td>{{ $clie->nome }}</td>
            <td>{{ $clie->fone1 }}</td>
           
            <td>
              @csrf
                <a href="#">
                
                  <button id="btneditar" >
                       Editar
                   </button> 
                </a> 
                
            </td>
            <td>
              <a href="#">
                  <button id="btndeletar" >
                       Deletar
                   </button> 
                </a> 
            {{-- 
                <form action="{{ route('apagar', $clie->id) }}" method="post">
                   @csrf
                    <input type="hidden" name="_method" value="DELETE">
        
                   <button id="btndeletar" type="submit">deletar</button>
                </form> --}}
            </td>
         </tr>
   
  </div>
  
@endforeach

{{ $clientes->links() }}