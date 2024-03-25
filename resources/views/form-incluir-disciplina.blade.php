@extends('layouts.app')

@section('content')


<form class="card" action="{{route('disciplina.incluir')}}" method="POST">

@csrf


<div class="card-header">
<div class="card-title">
    Editando disciplina
    </div>
</div>

<div class="card-body">

<a href="{{route('disciplina.incluir')}}" class="btn btn-primary">
   Novo
</a>
<div class="form-group">
  <label for="id"  class="label-form">ID</label> 
    <input type="number" 
    name="id" id="id" 
    class="form-control" 
    value="0" readonly />
</div>

<div class="form-group">
  <label for="disciplina"  class="label-form">Disciplina</label> 
    <input type="text" 
    name="disciplina" 
    id="disciplina" 
    class="form-control" 
    value=""  />
</div>



</div>

<div class="card-footer">
<div class="btn-group">
  <a href="{{route('disciplinas.index')}}"  class="btn btn-warning">Inicio</a>
  <button type="submit" class="btn btn-warning">Incluir</button>
  <button type="reset" class="btn btn-primary">Limpar</button>
</div>
</div>

</form>

@endsection