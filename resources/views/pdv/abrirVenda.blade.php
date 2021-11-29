  @extends('layout')

  <h3>abrir vendas</h3>
<div>
  <label>Iniciar Venda</label>
</div>
<div>
 cliente: <input type="text">
  <div>
      <a href={{'listarClientes'}}>iniciar </a>
  </div>
</div><br>

  @foreach ($pdv as $prod)
  <div>
        <tr>
                 
            <td>{{ $prod->id }}</td>
         
            <td>{{ $prod->nome }}</td>

            <td>{{ $prod->status}}</td>
            <td>{{ number_format($prod->vtotal, 2, ',', '.') }}</td>
            <td>
            
               @csrf
                <a href="{{ route('pdv', $prod->id) }}">
                   <button id="btneditar" >abir</button> 
                </a> 
                
        {{--    </td> -
             <td>
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