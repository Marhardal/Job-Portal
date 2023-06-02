@props(['value', 'name'])
<input type="submit" value="{{ $value }}" {{ $attributes->merge(["class" => "rounded-md px-4 py-2 text-sm font-semibold text-white shadow-sm"]) }}>
