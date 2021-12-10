  @extends('layout')

<h1>Listagem de Produtos a escolher listarProdEscolher</h1>

 
@foreach ($produtos as $prod)
  <div>
        <tr>
                 
            <td>{{ $prod->id }}</td>
           {{--  <td>{{ $prod->grupo}}</td>  --}}
            <td>{{ $prod->descricao }}</td>
            <td>{{ number_format($prod->pvenda, 2, ',', '.') }}</td>
            <td>
              <form action="{{ route('prodescolhido', $prod->id) }}" method="post"> 
                                     {{--pdvitens --}}
                 @csrf
                 qde:<input type="type" id="inputqde" name="qde" value="1">
                 <button id="btneditar" >Escolher</button> 
                
              </form> 
            </td>
        {{--     <td>
              <a href="{{ route('apagar', $prod->id) }}">
                  <button id="btndeletar" >
                       Deletar
                   </button> 
                </a> 
            
                <form action="{{ route('apagar', $prod->id) }}" method="post">
                   @csrf
                    <input type="hidden" name="_method" value="DELETE">
        
                   <button id="btndeletar" type="submit">deletar</button>
                </form> 
            </td>--}}
         </tr>
   
  </div>
  
@endforeach

{{-- {{ $produtos->links() }}--}}