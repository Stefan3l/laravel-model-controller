@extends('layouts.layout')


@section('title')
    Laravel Movies
@endsection

@section('contenuto')
   
     {{-- recupero i dati dal controller --}}
    <div class="container">
        <ul>
            @foreach($movies as $movie)
            <li>
                {{ $movie['title']}} {{ $movie['original_title']}}
            </li>
            @endforeach
        </ul>
    </div>
@endsection