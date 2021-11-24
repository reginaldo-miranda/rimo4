
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
    <div>
        <input type="text" name="desconto">
    </div><br>
    <div>
        <input type="submit" name="Enviar">
    </div>
</form>