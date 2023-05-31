@props(['href'])
<a href="{{ $href }}" {{ $attributes->merge(["class"=>"bg-green-300 text-black rounded-md px-4 py-2"]) }}>{{ $slot }}</a>
