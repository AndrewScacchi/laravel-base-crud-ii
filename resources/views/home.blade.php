@extends('template.base')

@section('pageTitle', 'Laravel Base Crud')

@section('pageMain')
<main>
    <h1>Laravel Base Crud PART II</h1>

    <a href="{{route('comics.create')}}" class="btn btn-main">CREATE A NEW ENTRY</a>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Series</th>
            <th>Type</th>
            <th>Price</th>
            <th>Sales Date</th>
            <th></th>
        </tr>
        @for($i=0; $i<count($comics); $i++)
            <tr>
                <td>{{ $comics[$i]->id }}</td>
                <td>{{ $comics[$i]->title }}</td>
                <td>{{ $comics[$i]->series }}</td>
                <td>{{ $comics[$i]->type }}</td>
                <td>{{ $comics[$i]->price }}</td>
                <td>{{ $comics[$i]->sale_date }}</td>
                <td class="td-btn">
                        <a class="btn btn-green" href="{{ route('comics.show', ['comic'=>$comics[$i]->id])}}">SHOW</a>
                        <a class="btn btn-alert" href="{{ route('comics.edit', ['comic'=>$comics[$i]->id])}}">EDIT</a>
                        <form action="{{route('comics.destroy', ['comic'=>$comics[$i]->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">DEL</button>
                        </form>
                        {{-- <a class="btn btn-danger" href="">DEL</a> --}}
                </td>
            </tr>

        @endfor
    </table>
</main>
@endsection
