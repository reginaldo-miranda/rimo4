

<div class="container-fluid">
   <p>estou no pdv</p>

   @foreach ($dados as $cliente )
       {{$cliente->nome}}
   @endforeach
   <div>
    Nome: <input type="text" name="comanda" id="comanda" value="{{ $cliente->nome}}">
      </div><br>
   <div>
     Fone: <input type="text" name="nome"    id="nome" >
   </div><br>

    @include('pdv.selecionar') 
 
 {{--   @include('pdv.listarProdEscolhido') --}}
</div>