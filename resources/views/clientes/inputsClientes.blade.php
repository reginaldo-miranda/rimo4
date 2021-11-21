<form action="{{ route('clientes-store')}}" method="post">
    @csrf
    <div>
        <div>
            <label>Nome</label>
        </div>
        <input type="text" name="nome">
    </div>

    <div>
        <div>
            <label>Telefone</label>
        </div>
            <input type="text" name="fone1">
    </div>
    <br>
      

    <div>
        <input type="submit" name="Enviar">
    </div>
</form>