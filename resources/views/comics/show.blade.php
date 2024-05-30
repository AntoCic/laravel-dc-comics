@extends('layouts.app')

@section('title')Comic @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Comic</h1>
        </div>
        <div class="col-auto">
            <a class="btn btn-outline-light ms-2" href="{{ route('comics.edit',$comic) }}">📝</a>
            <form action="{{ route('comics.destroy',$comic) }}" method="POST" class="d-contents">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-outline-light ms-2">🗑️</button>
            </form>
        </div>
        <div class="bg-dark text-white p-5 text-center rounded my-3">
            <img src="{{$comic->thumb}}" alt="" width="200">
            <h2>{{ $comic->title}}</h2>
            <p>{{ $comic->series}} {{ $comic->sale_date}} <span class="badge text-bg-warning">{{ $comic->price}}</span></p>
            <p>{{ $comic->type}}</p>
            <p>{{ $comic->description}}</p>
        </div>
    </div>
</div>
@endsection
