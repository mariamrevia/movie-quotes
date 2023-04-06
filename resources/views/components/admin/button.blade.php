@props(['name'])



<button
    class="bg-red-300
w-[13rem] h-[3rem]
 text-white uppercase font-semibold 
 text-xs py-2 px-10 rounded-2xl 
 hover:big-blue-600 mt-5 mb-5 ml-3"
    {{ $slot }}>
    {{ $name }}</button>
