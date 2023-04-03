
<x-layout>
   

     
       <div class=" mt-[14rem] flex  flex-col  items-center">

        <div class="h-[16rem] w-[43rem]  border border-white">
            <p></p>
        </div>
           <h2 class="mt-[4rem] text-white text-48">{{$quote->body}}</h2>
           <a href="{{route('movie.show',['movie' => $quote->movie->id]) }}">

               <p class="mt-[7rem] text-white text-[3rem] underline">{{$quote->movie->title}}</p>

           </a>

       </div>
   


   
</x-layout>