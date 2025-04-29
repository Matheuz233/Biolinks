<x-layouts.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="form" enctype="multipart/form-data">
                <x-input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />
                <x-text-area name="description" placeholder="Description"
                    value="{{ old('description', $user->description) }}" />
                <x-input name="handler" prefix="biolinks.com.br/" placeholder="Handler"
                    value="{{ old('handler', $user->handler) }}" />
            </x-form>

            <x-slot:actions>
                <x-button form="form">Update Profile</x-button>
                <x-a :href="route('dashboard')">Cancel</x-a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layouts.app>
