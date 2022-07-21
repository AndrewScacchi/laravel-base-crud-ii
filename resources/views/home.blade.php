@extends('template.base')

@section('pageTitle', 'Laravel Base Crud')

@section('pageMain')
<main>
    <h1>Laravel Base Crud</h1>

    <a href="{{route('comics.create')}}" class="btn">Create a new Entry</a>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Series</th>
            <th>Type</th>
            <th>Price</th>
            <th>Sales Date</th>
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
                    <button>
                        <a href="/comics/{{$comics[$i]->id}}">
                            SHOW
                        </a>
                    </button>
                    <button>EDIT</button>
                    <button>DEL</button>
                </td>
            </tr>

        @endfor
    </table>
</main>
@endsection
