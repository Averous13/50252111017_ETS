<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}
            <div class="flex justify-center items-center">
                <table class="shadow-2xl border-2 border-slate-200 w-10/12 rounded-md overflow-hidden">
                    <thead>
                        <tr>
                            <th class="py-3 bg-white">Nama Barang</th>
                            <th class="py-3 bg-white">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($posts as $post)
                        <tr>
                            <td class="py-3 px-6 bg-white">{{ $post->nama }}</td>
                            <td class="py-3 bg-white"><div class="flex justify-center"> 
                                <a href="" class="cursor-pointer hover:scale-105 duration-300"><img src="image/view.png" alt=""></a>
                                <a href="" class="cursor-pointer hover:scale-105 duration-300"><img src="image/edit.png" alt=""></a> 
                                <a href="" class="cursor-pointer hover:scale-105 duration-300"><img src="image/x-mark.png" alt=""></a>
                            </div></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button class="inline-flex items-center px-4 py-2  bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                <a href="/dashboard/post/create">Add Product</a>
            </button>
        </div>
    </div>


</x-app-layout>
