@props(['name'])
<div>
    <textarea id="editor" name='{{ $name }}' {{ $attributes->merge(['placeholder'=>'']) }}>{!! old($name) !!}</textarea>
    <x-form.error name="{{ $name }}"/>
</div>
