@extends('layout/app')


@section('content')

<section class="comic_show">
    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col text-end p-5">
                <img class="img-fluid me-4" src="{{$comics->thumb}}" alt="{{$comics->series}}">
            </div>

            <div class="col py-5">
                <h3 class="pb-2">{{$comics->title}}</h3>
                <p class="py-2">
                {{$comics->description}}
                </p>
                <div class="info py-4">
                    <h5 class="pb-2">details</h5>
                    <div class="serie">
                        <strong>Serie:</strong> {{$comics->series}}
                    </div>
                    <div class="price py-2">
                        <strong>Prezzo:</strong> {{$comics->price}}
                    </div>
                    <div class="date">
                        <strong>Data di uscita:</strong> {{$comics->sale_date}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection