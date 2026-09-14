@extends('dashboard.post.master')

@section('content')

    <a href="{{route('categories.create')}}" target="blank">Create</a>

    <table>
        <thead>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Options</td>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $c)
                <tr>
                    <td>
                        {{$c->id}}
                    </td>
                    <td>
                        {{$c->title}}
                    </td>
                    <td>
                        <a href="{{route('categories.edit',$c)}}">Edit</a>
                        <a href="{{route('categories.show',$c)}}">Show</a>
                        <form action = "{{route ('categories.destroy', $c)}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories->links()}}


@endsection
