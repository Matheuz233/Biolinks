<div>
    <h1>Dashboard</h1>

    <div>
        <ul>
            @foreach ($links as $links)
                <li>
                    <a href="{{ $links['url'] }}">{{ $links['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
