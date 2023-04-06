<x-layout>

    <div class="bg-slate-300 w-50 h-35 mt-[17rem] border rounded flex flex-col justify-center">
        <form method="POST" action="{{ route('quote.update', ['quote' => $quote->id]) }}" enctype="multipart/form-data" class="pr-10 pl-10">
            @method('PATCH')

            @csrf

            <div class="mt-6">
                <label class="block mb-2 uppercase font-bold text-xl text-gray-700">Quote</label>
                <textarea name="body" id="body" class="border border-gray-200 p-2 w-full rounded"></textarea>


                @error('body')
                    <P class="text-red-500 text-xs mt-2">{{ $message }}</P>
                @enderror
            </div>
            <div class="mt-6">
                <label class="block mb-2 uppercase font-bold text-xl text-gray-700">Image</label>
                <input name="image" id="image" class="border border-gray-200 p-2 w-full rounded" type="file" />



                @error('image')
                    <P class="text-red-500 text-xs mt-2">{{ $message }}</P>
                @enderror
            </div>

            <div class="mt-6 mb-1">

                <label name="movies" class="font-bold text-xl mr-2">Movies</label>


                <select name="movie_id" id="movie_id">

                    @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}"{{ old('movie_id') }}>{{ ucwords($movie->title) }}
                        </option>
                    @endforeach
                </select>

                <button type="submit"
                    class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:big-blue-600 mt-5 mb-5 ml-3">

                    Create</button>

            </div>




        </form>


    </div>

</x-layout>
