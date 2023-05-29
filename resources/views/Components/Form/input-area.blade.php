@props(['name', 'placeholder', 'type'=>'text'])
<div class="">
    <div class="mt-2">
        {{-- <input type="{{ $type }}" name="{{ $name }}" id="Username" class="block w-full rounded border py-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6 pl-2" placeholder="{{ $placeholder }}"> --}}
        <div class="relative">
            <input type="{{ $type }}" class="border-b" name="{{ $name }}" placeholder="{{ $placeholder }}" >
            <label for="{{ $name }}" class="absolute block text-sm font-medium leading-6 text-gray-900">{{ ucwords($name) }}</label>
        </div>
    </div>
</div>
