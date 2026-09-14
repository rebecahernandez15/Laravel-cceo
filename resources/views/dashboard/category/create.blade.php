@extends('dashboard.master')

@section('content')

    <!-- Aquí adentro va tu formulario tal como lo tienes -->
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug">

        <button type="submit">Send</button>
    </form>

@endsection
