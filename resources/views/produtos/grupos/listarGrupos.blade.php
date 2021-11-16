@extends('layout')

<h1>Listagem de grupos</h1>

@foreach ($grupos as $grup)
  <div>
        <tr>
                 
            <td>{{ $grup->id }}</td>
            <td>{{ $grup->desconto }}</td>
            <td>{{ $grup->descricao }}</td>
            
              @csrf
                <a href="{{ route('show', $grup->id) }}">
                
                  <button id="btneditar" >
                       Editar
                   </button> 
                </a> 
                
            </td>
            <td>
              <a href=""{{ route('apagar', $grup->id) }}">
                  <button id="btndeletar" >
                       Deletar
                   </button> 
                </a> 
            {{-- 
                <form action="{{ route('apagar', $prod->id) }}" method="post">
                   @csrf
                    <input type="hidden" name="_method" value="DELETE">
        
                   <button id="btndeletar" type="submit">deletar</button>
                </form> --}}
            </td>
         </tr>
   
  </div>
  
@endforeach

{{ $grupos->links() }}