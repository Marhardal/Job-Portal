@props(['name', 'placeholder', 'type'=>'date'])
<div class="">
    <div class="">
        <label for="{{ $name }}" class="text-gray-500 text-sm focus:-top-3.5 focus:text-gray-500 focus:text-sm transition-all">{{ ucwords($placeholder) }}</label>
        <input type="{{ $type }}" name="{{ $name }}" class="w-full border-b-2 border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors" placeholder="{{ ucwords($placeholder) }}" id="" value="{{ old($name) }}">
    </div>
    <x-form.error name="{{ $name }}"/>
</div>
