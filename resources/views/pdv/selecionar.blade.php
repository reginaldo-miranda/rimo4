@extends('layout')

<script>

  function escol(valor){
    
    document.getElementById("inputselect").value=valor;
    var id=valor; 
  }
</script>

<div class="form-group">
<label for="marca_id">Grupo</label><br>
{{-- 
    <select id="escolher" onchange="escol(this.value);"> 
    

        <option>escolha o grupo</option>
        @foreach($grupo as $grup)
           <option value="{{$grup->id}}">{{$grup->descricao}}</option>
        @endforeach 
    
    </select>
    <form action="{{ route('selecionarpdv',[$grup->id] )}} " method="get">
      @csrf
       <input type="text" id="inputselect" name="grupopdv" value='valor'>
     </form>  --}}
     <select onchange="escolher" id="select" name="grupo">
        <option value="" selected disabled>Selecione um grupo</option>
            @foreach($grupo as $f)
            <option value="{{$f->id}}">{{$f->descricao}}</option>
            @endforeach
        </select>

     <form action="{{ route('selecionarpdv',[$escolher]) }}" method="GET">
        {{csrf_field() }}
   
          
   
   <br><br>
     <button type="submit">eviar</button>
   </form>
{{-- link interessante

<select required="required" class="form-control" name="title">
    <option></option>
    @foreach ($titles as $key => $val)
        @if (stristr($key, 'isGroup'))
            <optgroup label="{{ $val }}">
        @else
        <option value="{{ $key }}">{{ $val }}</option>
        @endif
    @endforeach
    </select>

    <option {{ old('name') == $key ? "selected" : "" }} value="{{ $value }}">



   <option value="{{ $key }}" {{ (Input::old("title") == $key ? "selected":"") }}>{{ $val }}</option>
   https://stackoverflow.com/questions/29148274/define-the-selected-option-with-the-old-input-in-laravel-blade

    --}}


</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


{{--
https://www.youtube.com/watch?v=WNLC2b5AVIE

<form class="form-horizontal" role="form" method="POST" action="{{ route('selecionar.filme') }}">
{{csrf_field() }}

<select class="form-control" style="width: 20%"  onchange="" id="select" name="filme">
  <option value="" selected disabled>Selecione um filme</option>
    @foreach($filmes as $f)
      <option value="{{$f->id}}">{{$f->nome}}</option>
    @endforeach
</select>

<br><br>
  <button type="submit" class="w3-btn-block">Ver eventos</button>
</form>


Route::post('selecionarFilme', ["as" => 'selecionar.filme', 'uses' => "FilmeController@store"]);


public function store(Request $request)
{
        $selecao = $request->get('select');

        return redirect('filmes/'.$selecao);
}

--}}


{{-- novo selecionar 
    
    <form method="GET" action="{{ route('selecionarpdv') }}">
     {{csrf_field() }}

        <select onchange="" id="select" name="grupo">
        <option value="" selected disabled>Selecione um grupo</option>
            @foreach($grupo as $f)
            <option value="{{$f->id}}">{{$f->descricao}}</option>
            @endforeach
        </select>

<br><br>
  <button type="submit">eviar</button>
</form>
    
   Route::post('selecionarFilme', ["as" => 'selecionar.filme', 'uses' => "FilmeController@store"]);
 
    
    
    
    
    
    --}}