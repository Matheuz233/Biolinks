<div>
    <h1>Criar um link</h1>

    @if ($message = session()->get('message'))
        <p>{{ $message }}</p>
    @endif

    <form action={{ route('links.create') }} method="post">
        @csrf

        <div>
            <label for="name">Nome</label>
            <input type="name" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="link">Link</label>
            <input type="link" name="link" id="link" value="{{ old('link') }}">
            @error('link')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Salvar</button>
    </form>
</div>
