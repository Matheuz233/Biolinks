@props(['name'])

<div>
    <input class="input input-bordered" {{ $attributes }} />

    @error($name)
        <div class="text-sm text-error">
            {{ $message }}
        </div>
    @enderror
</div>
