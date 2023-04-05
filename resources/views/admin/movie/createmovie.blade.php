<x-layout>

    <div class="bg-slate-300 w-50 h-35 mt-[17rem] border rounded flex flex-col justify-center">

        <h2 class="text-center font-bold text-2">Create Movie</h2>
        <form class="pr-10 pl-10" method="POST" action="/admin/movies" enctype="multipart/form-data">

            @csrf

            <div class="mt-6">
                <label class="block mb-2 uppercase font-bold text-xl text-white-700">Movie in English</label>
                <input name="title" id="title" class="border border-gray-200 p-2 w-full rounded" />


            </div>
            {{-- <div class="mt-6">
            <label 
            class="block mb-2 uppercase font-bold text-xl text-gray-700">Movie in Goergian</label>
            <input 
            name="title" 
            id="title"
            class="border border-gray-200 p-2 w-full rounded" />


        </div> --}}


            @error('title')
                <P class="text-red-500 text-xs mt-2">{{ $message }}</P>
            @enderror

            <button type="submit"
                class="bg-red-300 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:big-blue-600 mt-5 mb-5">

                Create</button>


        </form>



    </div>

</x-layout>
