<x-app-layout>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-white">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Upload Your Artworks
            </h2>
        </x-slot>           
        <form method="POST" action="{{ route('artworks.store') }}" enctype="multipart/form-data" class="bg-white dark:bg-[#eeede0] text-[#191913] rounded-lg shadow-md p-6 space-y6">
            @csrf

            <div class="">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-[#191913] dark:text-[#191913] mb-1">Title</label>
                        <input class="w-full border border-gray-300 dark:border-[#191913] rounded-md p-2 dark:bg-[#f7f6ec]" type="text" name="title" placeholder="Enter your title" required />
                    </div>
                    <div>
                        <label for="year_created" class="block text-sm font-medium text-[#191913] dark:text-[#191913] mb-1">Year Created</label>
                        <input class="w-full border border-gray-300 dark:border-[#191913] rounded-md p-2 dark:bg-[#f7f6ec]" type="text" name="year_created" required />
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium text-[#191913] dark:text-[#191913] mb-1">Price</label>
                        <input class="w-full border border-gray-300 dark:border-[#191913] rounded-md p-2 dark:bg-[#f7f6ec]" type="number" name="price" required />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="md:col-span-2">
                        <label for="description" class="block text-sm font-medium text-[#191913] dark:text-[#191913] mb-1">Description</label>
                        <textarea class="w-full border border-gray-300 dark:border-[#191913] rounded-md p-2 dark:bg-[#f7f6ec]" type="text" name="description" required></textarea>
                    </div>

                    <div>
                        <label for="category_id" class="block text-sm font-medium text-[#191913] dark:text-[#191913] mb-1">Category</label>
                        <select name="category_id" id="category-select" class="w-full border border-gray-300 dark:bg-[#f7f6ec] rounded-md p-2">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="medium" class="block text-sm font-medium text-[#191913] dark:text-[#191913] mb-1d">Medium</label>
                        <select name="medium" id="medium-select" class="w-full border border-gray-300 dark:border-[#191913] rounded-md p-2 dark:bg-[#f7f6ec]">
                            <option value="">--Please choose an option--</option>
                            <option value="Watercolor">Watercolor</option>
                            <option value="Digital">Digital</option>
                            <option value="Mixed media">Mixed media</option>
                            <option value="Oil on canvas">Oil on canvas</option>
                            <option value="Acrylic">Acrylic</option>
                        </select>
                    </div>

                    <div>
                        <label for="dimensions" class="block text-sm font-medium text-[#191913] dark:text-[#191913] mb-1">Dimensions</label>
                        <select name="dimensions" id="dimensions-select" class="w-full border border-gray-300 dark:border-[#191913] rounded-md p-2 dark:bg-[#f7f6ec]">
                            <option value="">--Please choose an option--</option>
                            <option value="24in x 36in">24in x 36in</option>
                            <option value="12in x 16in">12in x 16in</option>
                            <option value="8in x 10in">8in x 10in</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="is_available" class="block text-sm font-medium text-[#191913] dark:text-[#191913] mb-1">Status</label>
                        <select name="is_available" id="is-available-select" class="w-full border border-gray-300 dark:border-[#191913] rounded-md p-2 dark:bg-[#f7f6ec]">
                            <option value="">--Please choose an option--</option>
                            <option value="1">Available</option>
                            <option value="0">Sold Out</option>
                        </select>        
                    </div>

                    <div class="md:col-span-2">
                        
                        <div class="relative w-full border border-gray-300 dark:border-[#191913] rounded-md p-2 dark:bg-[#f7f6ec] cursor-pointer">
                            <span class="flex items-center gap-2 text-[#191913] dark:text-[#191913]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                </svg>
                                <span>Upload Artwork</span>
                            </span>

                            <!-- Hidden file input -->
                            <input type="file" name="image" id="image" accept="image/*" required
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Upload a high-quality image of your artwork</p>
                    </div>
                </div>

                <div class="flex justify-end mt-6">
                    <button class="px-4 py-2 rounded-full bg-[#c9a050] text-[#191913] font-semibold hover:bg-[#c9a050]/90 focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">Upload</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
