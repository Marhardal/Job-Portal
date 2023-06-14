@props(['name', 'placeholder', 'type'=>'text', 'value'=>''])
<div {{ $attributes->merge(['class'=>'']) }}>
    <div class="relative">
        <textarea name="{{ $name }}" cols="30" rows="7" class="peer w-full border-2 rounded-md py-2 border-gray-300 focus:border-blue-600 px-2 focus:outline-none transition-colors placeholder-transparent focus:top-3 resize-none" placeholder="{{ ucwords($placeholder) }}" id="{{ $name }}" >{{ old($name)  }}</textarea>
        <label for="{{ $name }}" class="absolute left-0 -top-2 pl-2 text-gray-500 text-sm peer-placeholder-shown:text-base  peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-gray-500 peer-focus:text-sm transition-all bg-transparent">{{ ucwords($placeholder) }}</label>
    </div>
    <x-form.error name="{{ $name }}"/>
</div>
