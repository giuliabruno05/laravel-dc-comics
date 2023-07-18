@extends('layouts.layout')
@section('content')
    <main>
        <a href="{{route('create')}}">+</a>
        <ul>
            @foreach ($comics as $comic)
            <li class="text-center">
                <a href="{{route('show', $comic -> id)}}">
                    {{ $comic -> title }}
                </a>
            </li>
            @endforeach
        </ul>
    </main>
@endsection