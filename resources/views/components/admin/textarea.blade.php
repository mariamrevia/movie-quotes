@props(['name', 'text'])

<div class="mt-6">
    <label class="block mb-2 uppercase font-bold text-xl text-gray-700">{{ $text }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" class="border border-gray-200 p-2 w-full rounded">
        {{ $slot ?? old($name) }}
    </textarea>
    <x-admin.error name="{{ $name }}" />
</div>
