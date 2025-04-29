<x-layouts.app>
    <x-container>
        <x-card title="Editing link {{ $link->name }}">
            <x-form :route="route('links.edit', $link)" put id="form">
                <x-input name="name" placeholder="Name" value="{{ old('name', $link->name) }}" />
                <x-input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
            </x-form>

            <x-slot:actions>
                <x-button form="form">Update Link</x-button>
                <x-a :href="route('dashboard')">Cancel</x-a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layouts.app>
