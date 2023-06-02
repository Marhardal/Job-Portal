@props(['name', 'label', 'placeholder'=>''])
<div {{ $attributes->merge(["class"=>"relative flex"])}}>
    <input type="radio" name="{{ $name }}" class="h-4 w-4 rounded border-gray-500 focus:ring-blue-500 mr-3" value="{{ $label ?? old($label) }}">
    <label for="{{ $name }}" class="block text-sm text-gray-500 -mt-1" >{{ ucwords($label) }}</label>
</div>
