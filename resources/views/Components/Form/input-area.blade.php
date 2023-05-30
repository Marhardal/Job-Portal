@props(['name', 'placeholder', 'type'=>'text'])
<div class="">
    <div class="relative">
        <input type="{{ $type }}" name="{{ $name }}" class="w-full border-b-2 border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors peer placeholder-transparent" placeholder="{{ ucwords($placeholder) }}"id="">
        <label for="{{ $name }}" class="absolute left-0 text-gray-500 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:-top-3.5 peer-focus:text-gray-500 peer-focus:text-sm transition-all ">{{ ucwords($placeholder) }}</label>
    </div>
</div>
