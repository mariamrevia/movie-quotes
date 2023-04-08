<x-layout>

    <div class="bg-slate-300 w-50 h-35 mt-[17rem] border rounded flex flex-col justify-center">
        <div class="flex flex-row justify-between pr-10 pl-10">

            <h2 class="flex items-center text-white uppercase font-semibold 
             text-[2rem]">{{__('newmovie.Add_Movie')}}</h2>
             <x-admin.link :route="route('dashboard.show')">
                <x-admin.button  :name="__('allmovie.Dash')"/> 
            </x-admin.link>
        </div>
        <form class="pr-10 pl-10" method="POST" action="{{route('movies.store')}}" enctype="multipart/form-data">

            @csrf

            <x-admin.input name="title" :text="__('newmovie.Movie_En')"/>
            <x-admin.input name="title" :text="__('newmovie.Movie_Ka')"/>
        
            <button type="submit"
                class="bg-red-300 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:big-blue-600 mt-5 mb-5">

                {{__('newmovie.Add')}}</button>


        </form>



    </div>

</x-layout>
