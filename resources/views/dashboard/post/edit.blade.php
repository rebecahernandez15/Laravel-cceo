@extends('dashboard.post.master')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('posts.update', $post->id) }}" method="POST">

        @method('PATCH')

        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$post->title}}">

        <label for="slug">Slug</label>
        <input type="text" name="slug" value="{{$post->slug}}">

        <label for="content">Content</label>
        <textarea name="content" >{{$post->content}}"</textarea>

        <label for="">Category</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $title => $id)
                <option value="{{$id}}" {{$post->category->id == $id ? 'selected' : ''}}>{{$title}}</option>
            @endforeach
        </select>

        <label for="description">Description</label>
        <textarea name="description" >{{$post->description}}</textarea>

        <label for="posted">Posted</label>
        <select name="posted" id="posted">
            <option {{$post->posted == 'yes' ? 'selected' : ''}} value="yes">Yes</option>
            <option {{$post->posted == 'not' ? 'selected' : ''}} value="not">Not</option>
        </select>

        <button type="submit">Send</button>
    </form>
@endsection
