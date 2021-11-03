@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group mt-2">
                        <label for="series"><strong>Series</strong></label>
                        <input value="{{ $comic['series'] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter name of series">
                    </div>
                    <div class="form-group mt-4">
                        <label for="title"><strong>Title</strong></label>
                        <input value="{{ $comic['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
                    </div>
                    <div class="form-group mt-4">
                        <label for="description"><strong>Description</strong></label>
                        <input value="{{ $comic['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter description of comic">
                    </div>
                    <div class="form-group mt-4">
                        <label for="thumb"><strong>Image</strong></label>
                        <input value="{{ $comic['thumb'] }}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter URL image of comic">
                    </div>
                    <div class="form-group mt-4">
                        <label for="price"><strong>Price</strong></label>
                        <input value="{{ $comic['price'] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter price of comic">
                    </div>
                    <div class="form-group mt-4">
                        <label for="sale_date"><strong>Sale date</strong></label>
                        <input value="{{ $comic['sale_date'] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter sale date of comic">
                    </div>
                    <div class="form-group mt-4">
                        <label for="type"><strong>Type</strong></label>
                        <input value="{{ $comic['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter type of comic">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection