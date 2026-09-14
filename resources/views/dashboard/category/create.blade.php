@extends('dashboard.post.master')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('categories.store') }}" method="POST">

        @include('dashboard.category._form')

    </form>
@endsection
