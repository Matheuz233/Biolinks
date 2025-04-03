<div>
    @if ($message = session()->get('message'))
        <p>{{ $message }}</p>
    @endif

    <h1>Dashboard</h1>

    <div>
        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ route('links.edit', $link) }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
