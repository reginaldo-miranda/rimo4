
<form action="{{ route('prod_grupo')}} " method="post">
    @csrf
    <div>
        <div>
            <label>Grupo</label>
        </div>
        <input type="text" name="descricao">
    </div>
    <div>
    <div>
        <label>Desconto</label>
    </div>
    <input type="text" name="desconto">

    <div>
        <div>
            <label>Enviar</label>
        </div>
        <input type="submit" name="Enviar">
    </div>
</form>