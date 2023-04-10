<x-layout>

    <div class="bg-slate-300 w-[55rem] h-[42rem] mt-[17rem] border rounded flex flex-col justify-center">
        <div class="flex flex-row justify-between pr-10 pl-10">

            <h2 class="flex items-center text-white uppercase font-semibold 
             text-[2rem]">{{__('newquote.Add_Quote')}}</h2>
             <x-admin.link :route="route('dashboard.show')">
                <x-admin.button  :name="__('allmovie.Dash')"/> 
            </x-admin.link>
        </div>
        <form method="POST" action="{{route('quotes.store')}}" enctype="multipart/form-data" class="pr-10 pl-10">

            @csrf

           <x-admin.textarea name="body[en]" :text="__('newquote.Quote_En')"/>
            <x-admin.textarea name="body[ka]" :text="__('newquote.Quote_Ka')"/>
            <x-admin.input name="image" type="file" :text="__('newquote.Image')" />
        
            <div class="mt-6 mb-1">

                <label name="movies" class="font-bold text-xl mr-2">{{__('newquote.Movies')}}</label>
                <select name="movie_id" id="movie_id">

                    @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}">{{ ucwords($movie->title) }}
                        </option>
                    @endforeach
                    @error('movie_id')
                    <P class="text-red-500 text-xs mt-2">{{ $message }}</P>    
                    @enderror
                </select>

                <button type="submit"
                    class="bg-red-300 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:big-blue-600 mt-5 mb-5 ml-3">

                    {{__('newquote.Add')}}</button>
                   
                </div>
            </div>
        </form>
    </div>

</x-layout>
