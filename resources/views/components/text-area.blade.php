@props(['value'])

<textarea {{ $attributes->class(['textarea textarea-bordered w-full']) }} name="{{ $attributes['name'] }}"
    id="{{ $attributes['name'] }}" rows="4">{{ $value }}</textarea>
