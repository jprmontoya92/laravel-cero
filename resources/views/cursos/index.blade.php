@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Bienvenido a la pagina principal de cursos</h1>
    
    <a href="{{route('cursos.create')}}">Crear Curso</a>

    @foreach ($curso as $cursos)
        <ul>
            <li>
                <a href="{{route('cursos.show',$cursos)}}">{{$cursos->name}}</a>
            </li>
        </ul>

        @endforeach
        {{$curso->links()}}

@endsection 