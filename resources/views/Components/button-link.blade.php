@props(['href'])
<a href="{{ $href }}" {{ $attributes->merge(["class"=>"text-sm font-semibold text-gray-900 shadow-sm rounded-md"]) }}>{{ $slot }}</a>
