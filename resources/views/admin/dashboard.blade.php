<x-layout>
    <div class="flex flex-col border-2 border-red-400 w-35 h-35 mt-[18rem] items-center justify-center rounded">
       
        <div class="flex flex-col">
            <h2 class=" text-white uppercase font-semibold 
        text-xm">Manage Movies</h2>
            <a href="{{ route('movies.create') }}">

                <button
                    class="bg-red-300
                w-[13rem] h-[3rem]
                 text-white uppercase font-semibold 
                 text-xm py-2 px-10 rounded-2xl 
                 hover:big-blue-600 mt-5 mb-5 ml-3">
                    create movie</button>
            </a>

            <a href="{{ route('movies.show_all') }}">

                <button
                    class="bg-red-300
                
                w-[13rem] h-[3rem]
                 text-white uppercase font-semibold 
                 text-xm py-2 px-10 rounded-2xl 
                 hover:big-blue-600 mt-5 mb-5 ml-3">


                    All Movies</button>
            </a>
        </div>

        <div class="flex flex-col mt-[2rem]">

            <h2 class=" text-white uppercase font-semibold 
        text-xm">Manage Quotes</h2>

            <a href="{{ route('quotes.create') }}">

                <button
                    class="bg-red-300
                    
                    w-[13rem] h-[3rem]
                    
                     text-white uppercase font-semibold 
                     text-xm py-2 px-10 rounded-2xl 
                     hover:big-blue-600 mt-5 mb-5 ml-3">


                    Create Quote</button>
            </a>
            <a href="{{ route('quotes.create') }}">

                <button
                    class="bg-red-300
                    
                    w-[13rem] h-[3rem]
                     text-white uppercase font-semibold 
                     text-xm py-2 px-10 rounded-2xl 
                     hover:big-blue-600 mt-5 mb-5 ml-3">


                    All Quotes</button>
            </a>
        </div>


    </div>
</x-layout>
