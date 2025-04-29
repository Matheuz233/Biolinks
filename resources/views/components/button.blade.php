@props(['href' => null, 'block' => null, 'outline' => null, 'info' => null, 'ghost' => null])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }} @if ($href) href="{{ $href }}" @endif
    {{ $attributes->class(['btn btn-primary', 'btn-block' => $block, 'btn-outline' => $outline, 'btn-info' => $info, 'btn-ghost' => $ghost]) }}>
    {{ $slot }}
    </{{ $tag }}>
