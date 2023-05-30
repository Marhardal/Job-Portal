@props(['name', 'label', 'placeholder'=>'', 'class'=>'block text-sm text-gray-500'])
<div class="relative flex">
    <input type="checkbox" name="{{ $name }}" class="h-4 w-4 rounded border-gray-500 focus:ring-blue-500 mr-3 py-2">
    <label for="{{ $name }}" class="{{ $class }}" >{{ ucwords($label) }}</label>
</div>
