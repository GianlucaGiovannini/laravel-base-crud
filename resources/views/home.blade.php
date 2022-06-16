@extends('layout/app')



@section('content')

<div class="container text-center py-5">
    <h1> Scopri tutti i Fumetti a disposizione</h1>

    <a href="{{ route('comics.index') }}" class="btn btn-primary py-3"> Scoprili tutti</a>
</div>

<section class="comics-see">
    <div class="container">
        <div class="row row-cols-2 g-4">
            @forelse($comics as $comic)
            <div class="col px-5 pb-3">
                <div class="cards px-5  text-center">
                    <img class="img_home" src="{{ $comic->thumb }}">
                    <div>
                        <h5>{{$comic->series}}</h5>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-12">
                Nessun fumetto da mostrare
            </div>

        </div>
        @endforelse
    </div>
</section>

@endsection