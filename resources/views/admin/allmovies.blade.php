<x-layout>

   
    <div class="flex flex-col mt-[11rem] ">
        <h2 class=" text-white uppercase font-semibold 
         mb-[3rem] text-[2rem]">All Movies</h2>
        <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="bg-slate-300 py-5 rounded  align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-dull divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($movies as $movie)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-no  wrap">
                                                    <div class="flex items-center">
                                                        <div class="text-xl font-medium text-gray-900">
                                                            <a>
                                                                {{ $movie->title }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
        
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
        
                                                    <a href="{{route('movie.edit', ['movie' => $movie->id])}}"
                                                        class="text-blue-500 hover:text-blue-600">Edit
                                                    </a>
        
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
        
                                                    <form method="POST" action="{{ $movie->id }}">
                                                        @csrf
                                                        @method('DELETE')
        
                                                        <button class="text-xl text-red-400">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        
        
        
        </div>







</x-layout>