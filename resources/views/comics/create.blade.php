@extends('template.base')

@section('pageTitle', 'create new comic')

@section('pageMain')
<main>
    <h1>Insert New Comic</h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
        </div>
        <div>
            <label for="sale_date">Sale date</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        <div>
            <label for="type">type</label>
            <input type="text" name="type" id="type">
        </div>
        <input type="submit" value="Send">
    </form>
</main>
@endsection
