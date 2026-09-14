@extends('dashboard.master')

@section('content')

    <a class="btn btn-success my-3" href="{{route('posts.create')}}" target="blank">Create</a>

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
                    <a class="mt-2 btn btn-primary" href="{{route('posts.edit',$p)}}">Edit</a>
                    <a class="mt-2 btn btn-primary" href="{{route('posts.show',$p)}}">Show</a>
                    <form action = "{{route ('posts.destroy', $p)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class=" mt-2 btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->links()}}


@endsection
