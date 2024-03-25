@extends('layouts.app')

@section('content')

<div class="p-2">

<a href="{{route('disciplinas.index')}}" class="btn btn-info">
    inicio
</a>
<a href="{{route('disciplina.novo')}}" class="btn btn-primary">
    novo
</a>
</div>

<table class="table table-hover table-striped">
    <thead class="bg-primary">
<tr>
    <th width="50">ID</th>
    <th width="*">Disciplina</th>
    <th width="180">Criado em</th>
    <th width="180">Atualizado em</th>
    <th width="180">Ações</th>
</tr>
</thead>

<tbody>
@foreach($disciplinas as $disciplina)
<tr>
    <td>{{$disciplina->id}}</td>
    <td>{{$disciplina->disciplina}}</td>
    <td>{{$disciplina->created_at}}</td>
    <td>{{$disciplina->updated_at}}</td>   
    <td>
        <a href="{{ route('disciplina.editar',
            [
              'id'=> $disciplina->id
            ] )}}"
         class="btn btn-info btn-sm">Editar</a>

        <a href="{{route('disciplina.excluir' , ['id' => $disciplina->id])}}" class="btn btn-danger btn-sm">Excluir</a>
</td>
</tr>
@endforeach
</tbody>
<tfoot>
<tr>
<th colspan="5">
    # Número de registros: {{ App\Models\Disciplina::count()}}
</th>
</tr>
</tfoot>
</table>
</div>

@endsection