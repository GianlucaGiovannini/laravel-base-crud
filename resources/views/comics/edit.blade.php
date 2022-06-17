@extends('layout/app')

@section('content')

<div class="container">

    <h1 class="text-center">Modifica Fumetto {{ $comic->title }}</h1>
    @include('partials.errors')

    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo Fumetto</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Batman" value="{{$comic->title}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine copertina</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="https://immagine.png" value="{{$comic->thumb}}">
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="19.99" value="{{$comic->price}}">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="Action Comics" value="{{$comic->series}}">
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="2018-10-02" value="{{$comic->sale_date}}">
            @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Comic book" value="{{$comic->type}}">
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="8">
            {{$comic->description}}
            </textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifica Fumetto</button>

    </form>

</div>

@endsection