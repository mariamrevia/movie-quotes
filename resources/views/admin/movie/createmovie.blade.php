<x-layout>

    <div class="bg-slate-300 w-50 h-35 mt-[17rem] border rounded flex flex-col justify-center">

        {{-- <h2 class="text-center font-bold text-2">{{__('newmovie.Add_Movie')}}</h2> --}}

        <div class="flex flex-row justify-between pr-10 pl-10">

            <h2 class="flex items-center text-white uppercase font-semibold 
             text-[2rem]">{{__('newmovie.Add_Movie')}}</h2>
             <x-admin.link :route="route('dashboard.show')">
                <x-admin.button  :name="__('allmovie.Dash')"/> 
            </x-admin.link>
        </div>
        <form class="pr-10 pl-10" method="POST" action="{{route('movies.store')}}" enctype="multipart/form-data">

            @csrf

            <div class="mt-6">
                <label class="block mb-2 uppercase font-bold text-xl text-white-700">{{__('newmovie.Movie_En')}}</label>
                <input name="title" id="title" class="border border-gray-200 p-2 w-full rounded" />


            </div>
            <div class="mt-6">
            <label 
            class="block mb-2 uppercase font-bold text-xl text-gray-700">{{__('newmovie.Movie_Ka')}}</label>
            <input 
            name="title" 
            id="title"
            class="border border-gray-200 p-2 w-full rounded" />


        </div>


            @error('title')
                <P class="text-red-500 text-xs mt-2">{{ $message }}</P>
            @enderror

            <button type="submit"
                class="bg-red-300 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:big-blue-600 mt-5 mb-5">

                {{__('newmovie.Add')}}</button>


        </form>



    </div>

</x-layout>
