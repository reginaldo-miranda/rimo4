

<div class="container-fluid">
   <p>estou no pdv</p>
  
   
   @foreach ($clientes as $cliente )
       {{$cliente->nome}}
   @endforeach 
   <div>
    Nome: <input type="text" name="comanda" id="comanda" value="{{ $cliente->nome }}">
      </div><br>
   <div>
     Fone: <input type="text" name="nome"    id="nome" >
   </div><br>

 

 <div>
 {{-- @include('pdv.selecionar')  
  @isset($pdvitens)
    <p>variavel nao existe</p>
  @endisset
   
      
  
    @foreach ($pdvitens as $prod)
 
        <tr>
                 
            <td>{{ $prod->id }}</td>
           {{--  <td>{{ $prod->grupo}}</td>  
            <td>{{ $prod->descricao }}</td>
            <td>{{ $prod->qde}}</td>
            <td>{{ number_format($prod->vunit, 2, ',', '.') }}</td>
            <td>
            
               @csrf
                <a href="{{ route('acrescentar', $prod->id) }}">  
                   <button id="btneditar" >somar</button> 
                </a> 
                
            </td>
        {{--     <td>
                 </tr> --
   
  </div>
  
@endforeach --}}


   {{--  @include('pdv.listarProdEscolhido')  --}}
</div>