@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h2 class="mb-5">Dettagli Comic {{ $comic['title'] }}</h2>
                <div class="d-flex">
                    <img class="me-4" src="{{ $comic['thumb'] }}" alt="" srcset="">
                    <p><strong>DESCRIPTION: </strong>{!! $comic['description'] !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection