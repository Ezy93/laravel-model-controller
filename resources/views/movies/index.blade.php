@extends('layouts.main')


@section('title', 'movies')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="my-4">Movies:</h1>
                    <div class="row">
                        @foreach ($movies as $movie)
                            <div class="col-3">
                                <div class="card border-dark mb-3">
                                    <div class="card-header bg-transparent border-dark"><span class="fw-bold">Movie id:</span>{{" ".$movie->id}}</div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bolder mb-3">Movie info:</h5>
                                        <p class="card-text"> <span class="fw-bold">Title:</span> {{' '.$movie->title}}</p>
                                        <p class="card-text"> <span class="fw-bold">Original title:</span> {{' '.$movie->original_title}}</p>
                                        <p class="card-text"> <span class="fw-bold">Nation of production:</span> {{' '.$movie->nationality}}</p>
                                        <p class="card-text"> <span class="fw-bold">Release date:</span> {{' '.$movie->date}}</p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success"><span class="fw-bold">Rating:</span>{{' '.$movie->vote}}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                        
                </div>
            </div>
        </div>
    </main>
@endsection
    
