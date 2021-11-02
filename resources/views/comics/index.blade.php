@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Indice Comic</h1>
        @dump($comics);
    </div>
@endsection