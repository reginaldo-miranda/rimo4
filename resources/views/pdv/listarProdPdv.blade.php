 <h1>estou na listagem</h1>
 
 @foreach($produtos as $prod)
   {{ $prod->grupo}} {{$prod->descricao}} {{ $prod->pvenda}}<br>
 @endforeach 