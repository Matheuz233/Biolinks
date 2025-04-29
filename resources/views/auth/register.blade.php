<x-layouts.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" method="post" id="register-form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
                <x-input name="email" placeholder="Email" value="{{ old('email') }}" />
                <x-input name="password" type="password" placeholder="Password" />
                <x-input name="password_confirmation" type="password" placeholder="Confirm password" />
            </x-form>

            <x-slot:actions>
                <x-button type="submit" form="register-form">Register</x-button>
                <x-a :href="route('login')">Already have an account? Login</x-a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layouts.app>
