
<form action="{{ route('produtos.store')}}" method="post">
    @csrf
    <div>
        <div>
            <label>Descricao</label>
        </div>
        <input type="text" name="descricao">
    </div>
    <div>
    <div>
        <label>Unidade</label>
    </div>
    <input type="text" name="un">


    </div>
    <div>
        <div>
           {{--  <label>Grupo</label> --}}
               @include('produtos.grupos.selecionar')  

          <div>
        <div>
            <label>Preco Venda</label>
        </div>
        <input type="text" name="pvenda">
    </div>
    <div>
        <div>
            <label>Qtde</label>
        </div>
        <input type="text" name="qde">
    </div><br>
  
    <div>
         <input type="submit" name="Enviar">
    </div>
</form>