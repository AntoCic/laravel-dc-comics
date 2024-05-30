@extends('layouts.app')

@section('title')Comic @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Comic</h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('comics.update',$comic) }}" method="POST">
            @csrf     
            @method('PUT')     
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Titolo della pasta" value="{{$comic->title}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione">{{$comic->description}}</textarea>
              </div>
    
            <div class="mb-3">
              <label for="thumb" class="form-label">Image</label>
              <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{$comic->thumb}}">
            </div>
    
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text" name="price" class="form-control" id="price" placeholder="$100.00" value="{{$comic->price}}">
            </div>
    
            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" name="series" class="form-control" id="series" value="{{$comic->series}}">
            </div>
    
            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale date</label>
              <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" class="form-control" id="type" value="{{$comic->type}}">
            </div>
    
            <button class="btn btn-success">Confirm changes</button>
          </form>
    </div>
</div>
@endsection
