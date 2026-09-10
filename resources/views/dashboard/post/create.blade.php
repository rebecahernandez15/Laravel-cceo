@extends('dashboard.post.master')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug">

        <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>

        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $title => $id)
                <option value="{{$id}}">{{$title}}</option>
            @endforeach
        </select>

        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>

        <label for="posted">Posted</label>
        <select name="posted" id="posted">
            <option value="not">Not</option>
            <option value="yes">Yes</option>
        </select>

        <button type="submit">Send</button>
    </form>
@endsection
