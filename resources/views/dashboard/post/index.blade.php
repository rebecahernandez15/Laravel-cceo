@extends('dashboard.master')

@section('content')

    <a href="{{route('posts.create')}}" target="blank">Create</a>

    <table class="table">
        <thead>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Posted</td>
            <td>Category</td>
            <td>Options</td>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $p)
            <tr>
                <td>
                    {{$p->id}}
                </td>
                <td>
                    {{$p->title}}
                </td>
                <td>
                    {{$p->posted}}
                </td>
                <td>
                    {{$p->category->title}}
                </td>
                <td>
                    <a href="{{route('posts.edit',$p)}}">Edit</a>
                    <a href="{{route('posts.show',$p)}}">Show</a>
                    <form action = "{{route ('posts.destroy', $p)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->links()}}


@endsection
