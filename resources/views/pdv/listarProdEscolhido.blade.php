@extends('layout')
<h3>produtos escolhidos aqui</h3>
 

@foreach ($pdvitens as $prod)
  <div>
        <tr>
                 
            <td>{{ $prod->id_produto }}</td>
            <td>id cliente{{ $prod->id_cliente}}</td> 
            <td>{{ $prod->descricao }}</td>
            <td>{{ $prod->qde}}</td>
            <td>{{ number_format($prod->vunit, 2, ',', '.') }}</td>
            <td>
              <form action="{{ route('acrescentar', [$prod->id_produto , $prod->id_cliente])}}" method="post">
                
                @csrf
                                  
                <button id="btneditar">somar</button> 
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
 <div><br>
   @foreach ($totalv as $tod)
             
       Total Venda: {{$tod->totalve}}
               
    @endforeach
</div>