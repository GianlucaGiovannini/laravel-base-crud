@extends('layout/app')

@section('title-page', )

@section('content')
<div class="container">

    <div class="heading d-flex justify-content-between align-items-center">
        <h1 class="p-5">Fumetti a disposizione</h1>
        <div>
            <a class="btn btn-primary" href="{{route('comics.create')}}" role="button">Crea nuovo fumetto</a>
        </div>
    </div>

    <table class="table text-white">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>thumb</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale date</th>
                <th>Type</th>

            </tr>
        </thead>
        <tbody>
            @forelse($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td><img width='50' src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}} € </td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}">View</a>  Edit  Delete
                </td>
            </tr>
            @empty
            <tr>
                <td>Nessun fumetto a disposizione</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>


@endsection