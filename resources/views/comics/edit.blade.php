@extends('template.base')

@section('pageTitle', 'Edit comic' . $comic['title'])

@section('pageMain')
<main>
    <h1>Edit Comic</h1>
    <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
        @method('put')
        @csrf
        <div>
            {{-- INPUT "NAME" must be equal to TABLE ROW for laravel to automate --}}
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{$comic->description}}">
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{$comic->price}}">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{$comic->series}}">
        </div>
        <div>
            <label for="sale_date">Sale date</label>
            <input type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div>
            <label for="type">type</label>
            <input type="text" name="type" id="type" value="{{$comic->type}}">
        </div>
        <input type="submit" value="Edit">
    </form>
</main>
@endsection
