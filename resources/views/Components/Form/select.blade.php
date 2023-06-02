@props(['name','loop'])
{{-- @dd($loop) --}}
<div class="">
    <div class="">
        <label for="{{ $name }}" class="text-gray-500 text-sm focus:-top-3.5 focus:text-gray-500 focus:text-sm transition-all">{{ ucwords($name) }}</label>
        <select name="{{ $name }}" class="w-full border-b-2 border-gray-300 py-1.5 focus:border-blue-600 px-2 focus:outline-none transition-colors">
            @foreach ($loop as $item)
                <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
            @endforeach
        </select>
    </div>
    <x-form.error name="{{ $name }}"/>
</div>
