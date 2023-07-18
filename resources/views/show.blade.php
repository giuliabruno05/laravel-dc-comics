@extends('layouts.layout')
@section('content')
    <main class="py-3">
        <div class="details">
            <h2>{{ $comic -> title }}</h2>
            <h4 class="badge text-bg-light">{{$comic -> type}}</h4>
            <img src="{{$comic -> thumb}}" alt="" class="w-100">
            <div class="text-details">
                <h6 class="badge text-bg-primary">{{$comic -> series}}</h6>
                <h6 class="badge text-bg-info">{{$comic -> sale_date}}</h6>
                <h6 class="badge text-bg-warning">{{$comic -> price}}</h6>
            </div>
        </div>
        <div class="text">
            <p>{{$comic -> description }} </p>
        </div>
    </main>
@endsection