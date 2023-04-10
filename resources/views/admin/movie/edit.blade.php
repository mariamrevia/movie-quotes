<x-layout>

    <div class="bg-slate-300 w-50 h-35 mt-[17rem] border rounded flex flex-col justify-center">
        <div class="flex flex-row justify-between pr-10 pl-10">
            <h2 class="flex items-center text-white uppercase font-semibold 
             text-[2rem]">{{ __('editmovie.Edit_Movie') }}</h2>
             <x-admin.link :route="route('dashboard.show')">
                <x-admin.button  :name="__('allmovie.Dash')"/> 
            </x-admin.link>
        </div>
        <form class="pr-10 pl-10" method="POST" action="{{ route('movie.update', ['movie' => $movie->id]) }}"
            enctype="multipart/form-data">
            @method('PATCH')


            @csrf
            <x-admin.input name="title.en" :value=" old('title.en', $movie->getTranslation('title', 'en'))" :text="__('editmovie.Movie_En')" />
            <x-admin.input name="title.ka" :value=" old('title.ka', $movie->getTranslation('title', 'ka'))" :text="__('editmovie.Movie_Ka')" />

            <button type="submit"
                class="bg-red-300 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:big-blue-600 mt-5 mb-5">

                {{ __('editmovie.Update') }}</button>


        </form>



    </div>

</x-layout>
