@extends('dashboard.post.master')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('posts.store') }}" method="POST">

        @include('dashboard.post._form')

    </form>
@endsection
