@props(['name', 'prefix' => null])

<label class="input input-bordered w-full">
    @if ($prefix)
        <span class="input-group-text">{{ $prefix }}</span>
    @endif

    <input class="grow" name="{{ $name }}" {{ $attributes }} />

    @error($name)
        <div class="text-sm text-error">
            {{ $message }}
        </div>
    @enderror
</label>
