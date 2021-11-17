<div class="form-group">
<label for="marca_id">Grupo</label><br>
  {{--   <select class="form-control"Grupo" required id="seletor"> --}}
    <select required id="seletor">
        @foreach($grupo as $grup)
           <option value="{{$grup->id}}">{{$grup->descricao}}</option>
        @endforeach
         {{-- <input type="text" name="grupo" value="{{$grup->id}}">  --}}
         <input type="text" name="grupo" id="inputselect" value=valor>
</select>
</div>
<div>
<select id="language">
$teste =	<option value="pt" selected>Português</option>
	<option value="en">English</option>
	<option value="es">Español</option>
</select>
echo $teste;
<script>
  var select = document.getElementById('language');
	var value = select.options[select.selectedIndex].value;

</script>
<input type="text" name="grupo" id="language">.value
</div>