@extends('layout')


<h1>Listagem de Produtos</h1>

@foreach ($produtos as $prod)
  <div>
        <tr>
                 
            <td>{{ $prod->id }}</td>
            <td>{{ $prod->qde }}</td>
            <td>{{ $prod->descricao }}</td>
            <td>{{ number_format($prod->pvenda, 2, ',', '.') }}</td>
            <td>
              @csrf
                <a href="{{ route('produtos.edit', $prod->id) }}">
                   <button id="btneditar" >Editar</button> 
                </a> 
             </td>
             <td>
                <a href="{{ route('produtos.destroy', $prod->id) }}">
                  <button id="btndeletar" >Deletar</button> 
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

{{ $produtos->links() }}