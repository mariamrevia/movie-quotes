<x-layout>



    <div class=" mt-[14rem] flex  flex-col  items-center">

        <div class="h-[24rem] w-[43rem] ">
            <img src="{{ asset('storage/' . $quote->image) }}" class="h-[24rem] w-[43rem] " />
        </div>
        <h2 class="mt-[4rem] text-white text-[3rem] w-[80rem] flex justify-center text-center">"{{ $quote->body }}"</h2>
        <a href="{{ route('movie.show', ['movie' => $quote->movie->id]) }}">

            <p class="mt-[7rem] text-white text-[3rem] underline">{{ $quote->movie->title }}</p>

        </a>

    </div>




</x-layout>
