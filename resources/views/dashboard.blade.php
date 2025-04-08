<div>
    @if ($message = session()->get('message'))
        <p>{{ $message }}</p>
    @endif

    <h1>Dashboard</h1>
    <h2>{{ auth()->user()->name }} :: {{ auth()->id() }}</h2>

    <a href="{{ route('profile') }}">Editar Perfil</a>
    <a href="{{ route('links.create') }}">Criar link</a>

    <div>
        <ul>
            @foreach ($links as $link)
                <li style="display:flex;">

                    @unless ($loop->last)
                        <form action="{{ route('links.down', $link) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <button type="submit">⬇️</button>
                        </form>
                    @endunless

                    @unless ($loop->first)
                        <form action="{{ route('links.up', $link) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <button type="submit">⬆️</button>
                        </form>
                    @endunless

                    <a href="{{ route('links.edit', $link) }}">{{ $link['id'] }} {{ $link['name'] }}</a>
                    <form action="{{ route('links.destroy', $link) }}" method="post"
                        onsubmit="return confirm('Certeza?')">
                        @csrf
                        @method('delete')
                        <button type="submit">Deletar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</div>
