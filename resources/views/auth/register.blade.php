<div>
    <h1>Register</h1>

    @if ($message = session()->get('message'))
        <p>{{ $message }}</p>
    @endif

    <form action={{ route('register') }} method="post">
        @csrf

        <div>
            <label for="name">Nome</label>
            <input type="name" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <button type="submit">Registrar</button>
    </form>
</div>
