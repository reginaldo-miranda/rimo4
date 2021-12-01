  @extends('layout')

  <h3>abrir vendas</h3>
<div>
  <label>Iniciar Venda</label>
</div>
<div>
 cliente: <input type="text">
  <div>
      {{-- anterior <a href={{'listarClientes.index'}}>iniciar </a> --}}
      <a href={{ route('Clientes.index')}}>nova venda</a>
  </div>
</div><br>

  @foreach ($pdv as $pd)
  <div>
        <tr>
                 
            <td>{{ $pd->id }}</td>
         
            <td>{{ $pd->nome }}</td>

            <td>{{ $pd->status}}</td>
            <td>{{ number_format($pd->vtotal, 2, ',', '.') }}</td>
            <td>
            
               @csrf
               {{--  <a href="{{ route('pdv.create', $pd->id) }}"> --}}
                 <a href="{{ route('buscarClientesPdv', $pd->id) }}"> 
                   <button id="btneditar" >Inseir 1</button> 
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