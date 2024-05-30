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
            <button id="trash" class="btn btn-outline-light ms-2">🗑️</button>

            
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

<div id="modal_trash" class="position-absolute top-0 start-0 vw-100 vh-100 bg-danger bg-opacity-25 d-none">
    <form action="{{ route('comics.destroy',$comic) }}" method="POST" class="position-absolute top-50 start-50 translate-middle v-50 h-50 bg-light p-5">
        @method('DELETE')
        @csrf
        <p class="text-end" id="modal_close"><b>x</b></p>
        <h2>Sicuro di voler eliminare: <br> <b>{{ $comic->title}}</b></h2>
        <button type="submit" class="btn btn-outline-danger ms-2">Conferma eliminazione</button>
    </form>
</div>

<script>
    const modalTrash = document.getElementById('modal_trash');
    document.getElementById('trash').addEventListener('click', ()=>{modalTrash.classList.remove('d-none');})
    document.getElementById('modal_close').addEventListener('click', ()=>{modalTrash.classList.add('d-none');})
</script>
@endsection
