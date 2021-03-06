@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="clo-12">
                <h1>ALL COMICS</h1>
            </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Series</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Sale date</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic['id']}}</th>
                        <td>{{$comic['series']}}</td>
                        <td>{{$comic['title']}}</td>
                        <td>{{$comic['price']}}</td>
                        <td>{{$comic['sale_date']}}</td>
                        <td>{{$comic['type']}}</td>
                        <td class="text-center d-flex justify-content-between">
                            <a href="{{ route('comics.show', $comic['id']) }}" class="btn btn-info">Details</a>
                            <a href="{{ route('comics.edit', $comic['id']) }}" class="btn btn-warning">Modify</a>
                            <form method="post" action="{{ route('comics.destroy', $comic['id']) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection