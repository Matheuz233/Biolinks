<x-layouts.app>
    <x-container>
        <x-card title="Create a new link">
            <x-form :route="route('links.create')" method="post" id="form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
                <x-input name="link" placeholder="Link" value="{{ old('link') }}" />
            </x-form>

            <x-slot:actions>
                <x-button form="form">Create a new Link</x-button>
                <x-a :href="route('dashboard')">Cancel</x-a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layouts.app>
