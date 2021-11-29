  @extends('layout')

<h3>inseir nova vendas</h3><br>



<div>
  <label>clente</label>
</div>
<div>
 

<form action="{{ route('gravar.store') }}" method="post">
    @csrf
    <input type="text" name"nome" value="{{ $clientes->nome }}">     
    <input type="text" name="id_clientes" value="{{$clientes->id}}">
    <input type="hidden" name="status" value="a">
    <input type="hidden" name="vtotal" value="0">
    <button id="btndeletar" type="submit">gravar</button>
 </form> 
 
</div>
