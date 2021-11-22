@extends('layouts.plantilla')

@section('title','curso' . $curso->name)
    
@section('content')

<h1>Bienvenidos al curso {{$curso->name}}</h1>

<a href="{{route('cursos.index')}}">volver a cursos</a>
<br>

<a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>

<p><strong>categoria: </strong>{{$curso->categoria}}</p>

<p>{{$curso->descripcion}}</p>


<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>


@endsection


 