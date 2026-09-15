@extends('web.master')

@section('content')
    <x-web.blog.post.show :post="$post" class="bg-red-100" other-attr="data" />
@endsection
