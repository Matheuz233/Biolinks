<x-layouts.app>

<h2>{{ $user->name }} :: {{ $user->id }}</h2>

<h3>biolinks.com.br/{{ $user->handler }}</h3>
<p>{{ $user->description }}</p>
<p>Links:</p>

<ul>
    @foreach ($user->links as $link)
        <li style="display:flex;">
            <a href="{{ $link->link }} " target="_blank">
                {{ $link->id }} . {{ $link->name }}
            </a>
        </li>
    @endforeach
</ul>

</x-layouts.app>
