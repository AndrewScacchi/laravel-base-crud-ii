@extends('template.base')

@section('pageTitle', '{{ $comic->title }}')

@section('pageMain')
    <main>
        <h1>{{ $comic->title }}</h1>
        <table>
            <thead>
                <tr>
                    <th>Campo:</th>
                    <th>Valore:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comic->toArray() as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
                <td></td>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
