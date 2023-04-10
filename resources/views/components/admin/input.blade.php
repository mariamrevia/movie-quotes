 @props(['name', 'text', 'errorname'])

 <div class="mt-6">
     <label class="block mb-2 uppercase font-bold text-xl text-gray-700">{{ $text }}</label>
     <input name="{{ $name }}" id="{{ $name }}"
     
 
     {{ $attributes(['value' => old($name)]) }}
         class="border border-gray-200 p-2 w-full rounded" />
     <x-admin.error name="{{ $errorname }}" />
 </div>
