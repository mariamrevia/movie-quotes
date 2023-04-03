
<x-layout>
   

     
       <div class=" mt-228 flex  flex-col  items-center">

        <div class="h-386 w-700  border border-white">
            <p></p>
        </div>
           <h2 class="mt-65 text-white text-48">{{$quote->body}}</h2>
           <a href="{{route('movie.show',['movie' => $quote->movie->id]) }}">

               <p class="mt-114 text-white text-48 underline">{{$quote->movie->title}}</p>

           </a>

       </div>
   


   
</x-layout>