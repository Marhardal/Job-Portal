@props(['value'=>'', 'name'=>'','id'=>''])
<button type="submit" id="{{ $id }}" {{ $attributes->merge(["class" => "rounded-md px-4 py-2 text-sm font-semibold text-white shadow-sm"]) }}>
    {{ $slot }}
</button>
{{-- <input type="submit" value="{{ $value }}" > --}}
