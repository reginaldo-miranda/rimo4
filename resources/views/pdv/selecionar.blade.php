@extends('layout')

<script>

  function escol(valor){
    
    document.getElementById("inputselect").value=valor;
   
  }
</script>

<div class="form-group">
<label for="marca_id">Grupo</label><br>

    <select id="escolher" onchange="escol(this.value);"> 
    

        <option>escolha o grupo</option>
        @foreach($grupo as $grup)
           <option value="{{$grup->id}}">{{$grup->descricao}}</option>
        @endforeach 
    
    </select>
    <form action="{{ route('selecionarpdv' , $grup->id)}} " method="get">
      @csrf
       <input type="text" id="inputselect" name="grupo"/>
     </form>  
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


{{--
https://www.youtube.com/watch?v=WNLC2b5AVIE
--}}