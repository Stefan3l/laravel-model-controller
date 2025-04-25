@extends('layouts.layout')


@section('title')
    Laravel Movies
@endsection

@section('contenuto')
   
     {{-- recupero i dati dal controller --}}
    <div class="container">
        <div class="mt-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-4 g-4">
            @foreach($movies as $movie)
                <div class="col ">
                    <x-card 
                        title="{{ $movie['title'] }}"
                        text="{{ $movie['original_title'] }}"
                        nationality="{{ $movie['nationality']}}"
                        date="{{ $movie['date'] }}"
                        vote="{{ $movie['vote'] }}">
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
@endsection