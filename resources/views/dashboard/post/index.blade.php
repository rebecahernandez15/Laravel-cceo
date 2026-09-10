@extends('dashboard.post.master')

@section('content')

    <a href="{{route('posts.create')}}" target="blank">Create</a>

    <table>
        <thead>
            <tr>
                <td>
                    Id
                </td>
            </tr>
            <tr>
                <td>
                    Title
                </td>
            </tr>
            <tr>
                <td>
                    Posted
                </td>
            </tr>
            <tr>
                <td>
                    Category
                </td>
            </tr>
            <tr>
                <td>
                    Options
                </td>
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
                        <a href="{{route('posts.show',$p)}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}


@endsection
