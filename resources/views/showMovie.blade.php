<x-layout>

    
    
    
    
    <div>
        <h1 class="font-sans text-white text-[3rem] mt-[5rem] h-[3rem]">{{ $movie->title }}</h1>
        @foreach ($movie->quotes as $quote)
            <div class=" mt-[5rem]">
                <div class="h-[26rem] w-[47rem]  border border-white bg-slate-300 rounded-t">
                    <img src="/storage/{{$quote->image}}"/>
                </div>
                <div class="h-[7.5rem] w-[47rem] bg-white text-black flex items-center border rounded-b">
                    <p class="ml-[1rem] text-[2rem]">"{{ $quote->body }}"</p>
                </div>
            </div>
        @endforeach

    </div>

</x-layout>
