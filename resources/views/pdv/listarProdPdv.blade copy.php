  @extends('layout')

<h1>Listagem de Produtos a escolher listarProdPdv</h1>

@foreach ($dados as $prod)
  <div>
        <tr>
                 
            <td>{{ $prod->id }}</td>
           {{--  <td>{{ $prod->grupo}}</td>  --}}
            <td>{{ $prod->descricao }}</td>
            <td>{{ number_format($prod->pvenda, 2, ',', '.') }}</td>
           
            <td>
              @csrf
                  <a href="{{ route('prodescolhido', $prod->id) }}"> {{-- pdvitens --}}
               
                   <button id="btneditar" >Escolher</button> 
                   <input type="text" >
                </a> 
                
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