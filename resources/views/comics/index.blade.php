@extends('layouts.app')

@section('title')Comics @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Comics</h1>
        </div>@foreach ($comics as $comic)
            <div class="bg-dark text-white p-5 text-center rounded my-3">
                <img src="{{$comic->thumb}}" alt="" width="200">
                <a href="{{ route('comics.show', $comic ) }}" class="h2">
                    {{ $comic->title}}
                  </a>
                <p>{{ $comic->series}}</p>
                <span class="badge text-bg-warning">{{ $comic->price}}</span>
            </div>
        @endforeach
    </div>
</div>
@endsection
