
<form action="{{ route('produtos')}}" method="post">
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
    <input type="text" name="Unidade">


    </div>
    <div>
        <div>
            <label>Grupo</label>
        </div>
        <input type="text" name="Grupo">
    </div>
    <div>
        <div>
            <label>Preco Venda</label>
        </div>
        <input type="text" name="Preco Venda">
    </div>
    <div>
        <div>
            <label>Qtde</label>
        </div>
        <input type="text" name="Qtde">
    </div>

    <div>
        <div>
            <label>Enviar</label>
        </div>
        <input type="submit" name="Enviar">
    </div>
</form>