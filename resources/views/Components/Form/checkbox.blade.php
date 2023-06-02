@props(['name', 'label', 'placeholder'])
<div class="">
    <label for="{{ $name }}">{{ $placeholder }}</label>
    <div class="grid grid-cols-3">
        <x-form.input-checkbox name="" label="{{ $checklabel }}"/>
        <x-form.input-checkbox name="{{ $name }}" label="{{ $checklabel }}"/>
    </div>
</div>
