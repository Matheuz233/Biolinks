@props(['route', 'post' => false])

<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ $route }}"
    method="{{ $post ? 'post' : 'get' }}">
    @csrf

    {{ $slot }}
</form>
