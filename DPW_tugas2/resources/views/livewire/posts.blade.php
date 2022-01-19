<div>
    <h1>anggi</h1>
</div>

 <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-7">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="{{ url('gambar/penjualan.jpg') }}" class="rounded mx-auto d-block" width="700" alt="">
                </div>

                <div class="mt-8 bg-white dark:bg-gray-500 overflow-hidden shadow sm:rounded-lg">
                <button wire:click="showModal()" class="bg-indigo-500 hover:bg-gray-700 text-white font-bold py-1 px-4 rounded mb-2">
                        Create Post
                    </button>
                    @if($isOpen)
                        @include('livewire.create')
                    @endif

                    <table class="table-fixed w-full">
                        <thead class="bg-gray-500">
                            <tr>
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>
                                    <button class="bg-gray-800 hover:bg-red-500 text-white font-bold py-1 px-4 rounded">Edit
                                    </button>

                                    <button class="bg-red-600 hover:bg-gray-700 text-white font-bold py-1 px-4 rounded">Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>

 
