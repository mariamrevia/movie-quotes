<x-layout>
    <div class="flex flex-col border-2 border-red-400 w-35 h-35 mt-[18rem] items-center justify-center rounded bg-slate-300 ">

        <x-admin.field>
            <x-admin.heading name="Manage Movies" />
            <x-admin.link :route="route('movies.create')">
                <x-admin.button name="Add a new Movie"/>
            </x-admin.link>

            <x-admin.link :route="route('movies.show_all')">
                <x-admin.button name="See all Movies" />
            </x-admin.link>

        </x-admin.field>


        <x-admin.field>
            <x-admin.heading name="Manage Quotes" />
            <x-admin.link :route="route('quotes.create')">

                <x-admin.button name="Add a new Quote" />
            </x-admin.link>

            <x-admin.link :route="route('quotes.show_all')">

                <x-admin.button name="See all Quotes" /> 
            </x-admin.link>
        </x-admin.field>


    </div>
</x-layout>
