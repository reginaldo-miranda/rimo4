

<div class="container-fluid">
   <p>estou no pdv</p>
   <div>
      <input type="text" name="comanda" id="comanda"></input>
   </div><br>
   <div>
      <input type="text" name="nome"    id="nome" ></input>
   </div><br>

   <div>
   Pesquisar:<input type="text" name="search" id="search" ></input>
   </div>


 {{-- @include('produtos.grupos.selecionar') --}}
 
 @foreach($produtos as $prod)
   {{ $prod->descricao}}
 @endforeach 
</div>