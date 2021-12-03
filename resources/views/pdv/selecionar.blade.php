@extends('layout')

<script>

  function escol(valor){
    
    document.getElementById("inputselect").value=valor;
   
  }
 
</script>

<div class="form-group">
    <select id="escolher" onchange="escol(this.value);">  
          <option>escolha o grupo</option>
       @foreach($grupos as $grup)
          <option value="{{$grup->id}}">{{$grup->descricao}}</option>
       @endforeach 
     
    </select><br>
  {{-- funcionando  <form action="{{ route('selecionarpdv')}}" method="post">  --}}
     <form action="{{ route('pdv.show', $grup->id)}}"> 
        @csrf
        <input type="submit" id="inputselect" name="grupo" />aqui</input>
     </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


{{--

 
https://www.youtube.com/watch?v=WNLC2b5AVIE
--}}