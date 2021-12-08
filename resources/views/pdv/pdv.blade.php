

<div class="container-fluid">
   <p>estou no pdv</p>
  
   
   @foreach ($clientes as $cliente )
       {{$cliente->nome}}
   @endforeach
 {{--   {{ session()->put('my_test_key','my_value')}}  --}}

   {{ session()->put('$cliente', $cliente->nome )}}

   {{ session()->put('$id_cli', $cliente->id )}}
   <div>
    Nome: <input type="text" name="comanda" id="comanda" value="{{ $cliente->nome }}">
      </div><br>
   <div>
     Fone: <input type="text" name="nome"    id="nome" >
   </div><br>
  @include('pdv.selecionar') 

  @include('pdv.listarProdEscolhido') 
 
 

</div>