<div>
    <h1>Editar um link: {{ $link->name }}</h1>

    @if ($message = session()->get('message'))
        <p>{{ $message }}</p>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="post">
        @csrf
        @method('put')

        <div>
            <label for="name">Nome</label>
            <input type="name" name="name" id="name" value="{{ old('name', $link->name) }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="link">Link</label>
            <input type="link" name="link" id="link" value="{{ old('link', $link->link) }}">
            @error('link')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Salvar</button>
    </form>
</div>
