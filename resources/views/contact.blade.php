@extends('master')

@section('content')
    <h1>Contact 1</h1>
    <p>{{$name}}</p>

    @if($name != "Rebeca")
        Tu nombre no es Rebeca
    @else
        <h2>Tu nombre es Rebeca</h2>
    @endif

    <ul>
        @foreach([1,2,3,4,5] as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection
