@extends('layout')
<h3>produtos escolhidos aqui</h3>
 

@foreach ($pdvitens as $prod)
  <div>
        <tr>

            <td>itens N:{{ $prod->id}}</td>
   
            <td>{{ $prod->id_produto }}</td>
            <td>id cliente{{ $prod->id_cliente}}</td> 
            <td>{{ $prod->descricao }}</td>
            <td>quantidade :{{ $prod->qde}}</td>
            <td>{{ number_format($prod->vunit, 2, ',', '.') }}</td>
            <td>
             
              <form action="{{ route('acrescentar', $prod->id_produto)}}" method="GET">
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