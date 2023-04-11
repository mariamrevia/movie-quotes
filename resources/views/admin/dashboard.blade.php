<x-layout>
    <div class="flex flex-col border-2 border-red-400 w-35 h-35 mt-[18rem] items-center justify-center rounded bg-slate-300 ">

        <x-admin.field>
            <x-admin.heading :name=" __('dash.Manage_Movies')"/>
            <x-admin.link :route="route('movies.create')">
                <x-admin.button :name="__('dash.New_Movie')"/>
            </x-admin.link>

            <x-admin.link :route="route('movies.show_all')">
                <x-admin.button :name="__('dash.See_Movies')"/>
            </x-admin.link>
        </x-admin.field>

        <x-admin.field>
            <x-admin.heading :name=" __('dash.Manage_Quotes')" />
            <x-admin.link :route="route('quotes.create')">
                <x-admin.button :name="__('dash.New_Quote')" />
            </x-admin.link>

            <x-admin.link :route="route('quotes.show_all')">
                <x-admin.button :name="__('dash.See_Quotes')"/> 
            </x-admin.link>
        </x-admin.field>

        <form id="logout" method="POST" action={{route('logout.destroy')}}>
        @csrf
        <x-admin.button :name="__('login.log_Out')"/> 
    </form>
      
    </div>
</x-layout>
