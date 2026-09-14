@extends('web.master')

@section('content')
    <x-web.blog.post.show :post="$post" />
@endsection
