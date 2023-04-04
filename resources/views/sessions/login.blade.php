<x-layout>
    <div class="bg-slate-300 w-96 h-35 mt-[17rem] border rounded flex flex-col justify-center">
        <main class="px-10">
            <h1 class="text-center font-bold text-2 ">Log In</h1>
            <form method="POST" action="/login" class="mt-10">
                @csrf
                <div class="flex flex-col">
                    <label for="email">Email</label>
                    <input name="email" id="email " class="border border-gray-200 p-2 w-full rounded "/>
                </div>

                <div class="flex flex-col">
                    <label for="password">Password</label>
                    <input name="password" type="password" autocomplete="current-password" class="border border-gray-200 p-2 w-full rounded"/>
                </div>

               

                <button type="submit"
                    class="bg-red-300
                     text-white uppercase font-semibold  text-xs py-2 px-10 rounded-2xl hover:big-blue-600 mt-9 mb-5">

                    LogIn</button>




        </main>
    </div>
</x-layout>
