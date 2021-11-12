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
                <button wire:click="edit({{ $prod->id }})"  id="btneditar">
                    Editar
                </button>
            </td>
            <td>
                <button wire:click="destruir({{ $prod->id }})" id="btndeletar">
                    Deletar
                </button>
                
            </td>
         </tr>
   
  </div>
  
@endforeach

{{ $produtos->links() }}