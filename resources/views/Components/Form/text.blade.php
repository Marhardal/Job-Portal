@props(['name', 'placeholder', 'type'=>'text'])
<div {{ $attributes->merge(['class'=>'']) }}>
    <div class="relative">
        <input type="{{ $type }}" name="{{ $name }}" class="peer w-full border-b-2 border-gray-300 h-10 focus:border-blue-600 px-2 focus:outline-none transition-colors placeholder-transparent focus:top-3" placeholder="{{ ucwords($placeholder) }}" id="{{ $name }}" value="{{ old($name) }}">
        <label for="{{ $name }}" class="absolute left-0 -top-3.5 text-gray-500 text-sm peer-placeholder-shown:text-base  peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-500 peer-focus:text-sm transition-all">{{ ucwords($placeholder) }}</label>
    </div>
    <x-form.error name="{{ $name }}"/>
</div>
