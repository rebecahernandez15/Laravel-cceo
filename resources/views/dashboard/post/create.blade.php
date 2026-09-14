@extends('dashboard.master')

@section('content')

    <!-- Todo el contenido de la vista DEBE ir aquí adentro -->
    <h1 style="color: red; font-size: 50px;">SI VES ESTO SÍ ES LA PÁGINA CORRECTA</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('posts.store') }}" method="POST">
        @include('dashboard.post._form')
    </form>

@endsection
