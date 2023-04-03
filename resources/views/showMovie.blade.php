<x-layout>

    
    
    
    
    <div>
        <h1 class="font-sans text-white text-48 mt-79 h-58">{{ $movie->title }}</h1>
        @foreach ($movie->quotes as $quote)
            <div class=" mt-82">
                <div class="h-414 w-748  border border-white bg-slate-300 rounded"></div>
                <div class="h-119 w-748 bg-white text-black flex items-center border rounded">
                    <p class="ml-18 text-36">"{{ $quote->body }}"</p>
                </div>
            </div>
        @endforeach

    </div>

</x-layout>
