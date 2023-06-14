@props(['value'=>'', 'name'=>''])
<button type="submit" {{ $attributes->merge(["class" => "rounded-md px-4 py-2 text-sm font-semibold text-white shadow-sm"]) }}>
    {{ $slot }}
</button>
{{-- <input type="submit" value="{{ $value }}" > --}}
