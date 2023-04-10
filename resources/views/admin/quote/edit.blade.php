<x-layout>

    <div class="bg-slate-300 w-[55rem] h-[40rem] mt-[17rem] border rounded flex flex-col justify-center">
        <div class="flex flex-row justify-between pr-10 pl-10">

            <h2 class="flex items-center text-white uppercase font-semibold 
             text-[2rem]">{{__('editquotes.Edit_Quote')}}</h2>
             <x-admin.link :route="route('dashboard.show')">
                <x-admin.button  :name="__('allmovie.Dash')"/> 
            </x-admin.link>
        </div>
        <form method="POST" action="{{ route('quote.update', ['quote' => $quote->id]) }}" enctype="multipart/form-data"
            class="pr-10 pl-10">
            @method('PATCH')
            
            @csrf
            <x-admin.textarea name="body[en]" :text="__('editquotes.Quote_En')"> {{ old('body.en',  $quote->getTranslation('body', 'en')) }}</x-admin.textarea>
            <x-admin.textarea name="body[ka]" :text="__('editquotes.Quote_Ka')"> {{ old('body.ka', $quote->getTranslation('body', 'ka')) }}</x-admin.textarea>

            <div class="mt-6 flex flex-row">
                <x-admin.input name="image" :text=" __('editquotes.Image')" type="file"/>
                <div class="flex justify-center items-end">
                    <img src="{{ asset('storage/' . $quote->image) }}" alt=""
                        class="rounded-xl ml-6 w-[6rem] h-[4rem] " >
                </div>
                <x-admin.error name="image" />
            </div>


            <div class="mt-6 mb-1">
                <label name="movies" class="font-bold text-xl mr-2">{{ __('editquotes.Movie') }}</label>
                <select name="movie_id" id="movie_id">

                    @foreach ($movies as $movie)
                        <option  value="{{ $movie->id }}"{{ old('movie_id') }}>{{ ucwords($movie->title) }}
                        </option>
                    @endforeach
                  
                </select>

                <button type="submit"
                    class="bg-red-300 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:big-blue-600 mt-5 mb-5 ml-3">
                    {{ __('editquotes.Update') }}</button>
            </div>
        </form>
    </div>

</x-layout>
