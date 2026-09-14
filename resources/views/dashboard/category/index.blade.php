@extends('dashboard.master')

@section('content')

    <a class="mt-2 btn btn-success" href="{{ route('category.create') }}">Create</a>

    <table class="table w-full mt-4">
        <thead>
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $c)
            <tr>
                <td>{{ $c->title }}</td>
                <td>
                    <a class="btn btn-primary mt-2" href="{{ route('category.edit', $c) }}">Edit</a>
                    <a class="btn btn-primary mt-2" href="{{ route('category.show', $c) }}">Show</a>
                    <form action="{{ route('category.destroy', $c) }}" method="POST" class="inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mt-2" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $categories->links() }}
    </div>

@endsection
