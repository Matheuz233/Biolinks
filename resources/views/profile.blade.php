<x-layouts.app>
    <div>
        <h1>Profile</h1>

        <form action={{ route('profile') }} method="post">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Nome</label>
                <input type="name" name="name" id="name" value="{{ old('name', $user->name) }}">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description">Descrição</label>
                <textarea type="description" name="description" id="description">{{ old('description', $user->description) }}</textarea>
                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="handler">biolinks.com.br/</label>
                <input type="handler" name="handler" id="description" value="{{ old('handler', $user->handler) }}"
                    placeholder="@seulink">
                @error('handler')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <a href="{{ route('dashboard') }}">Cancelar</a>
            <button type="submit">Atualizar</button>
        </form>
    </div>
</x-layouts.app>
