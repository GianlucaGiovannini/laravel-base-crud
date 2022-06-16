@extends('layout/app')



@section('content')

<div class="container">

    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo Fumetto</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman">
        </div>


        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine copertina</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://immagine.png">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="19.99">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Action Comics">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="2018-10-02">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Comic book">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="8"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>

    </form>

</div>



@endsection