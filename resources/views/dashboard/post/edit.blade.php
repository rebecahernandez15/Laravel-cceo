@extends('dashboard.post.master')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('posts.update', $post->id) }}" method="POST">

        @method('PATCH')
        @include('dashboard.post._form')


    </form>
@endsection
