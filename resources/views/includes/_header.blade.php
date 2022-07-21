<header>
    <nav>
        <ul>
            {{-- This take data from file config/navbar.php  --}}
            @foreach (config('navbar') as $item)
                <li><a href= "{{route($item['navLink'])}}"s>{{$item['navName']}}</a></li>
            @endforeach
        </ul>
    </nav>
</header>
