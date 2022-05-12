@extends('layouts.main')


@section('title', 'movies')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Movies:</h1>
                    <div class="col-3">
                        <div class="card border-dark mb-3">
                            <div class="card-header bg-transparent border-dark">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Success card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer bg-transparent border-success">Footer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
    
