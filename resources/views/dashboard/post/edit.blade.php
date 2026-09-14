@extends('dashboard.master')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @method('PATCH')
        @include('dashboard.post._form', ['task' => 'edit'])
    </form>

@endsection
