<div>
    @if ($message = session()->get('message'))
        <p>{{ $message }}</p>
    @endif

    <h1>Dashboard</h1>

    <a hrfe="{{ route('links.create') }}">Criar link</a>

    <div>
        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ route('links.edit', $link) }}">{{ $link['name'] }}</a>
                    <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('Certeza?')">
                        @csrf
                        @method('delete')
                        <button type="submit">Deletar</button>
                </li>
            @endforeach
        </ul>
    </div>
</div>
