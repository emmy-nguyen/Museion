<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-white">
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Upload Your Artworks
            </h2>
        </x-slot>           <form method="POST" action="{{ route('artworks.store') }}" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 space-y6">
            @csrf

            <div class="">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Title</label>
                        <input class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700" type="text" name="title" placeholder="Enter your title" required />
                    </div>
                    <div>
                        <label for="year_created" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Year Created</label>
                        <input class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700" type="text" name="year_created" required />
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Price</label>
                        <input class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700" type="number" name="price" required />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="md:col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Description</label>
                        <textarea class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700" type="text" name="description" required></textarea>
                    </div>

                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Category</label>
                        <select name="category_id" id="category-select" class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="medium" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1d">Medium</label>
                        <select name="medium" id="medium-select" class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700">
                            <option value="">--Please choose an option--</option>
                            <option value="Watercolor">Watercolor</option>
                            <option value="Digital">Digital</option>
                            <option value="Mixed media">Mixed media</option>
                            <option value="Oil on canvas">Oil on canvas</option>
                            <option value="Acrylic">Acrylic</option>
                        </select>
                    </div>

                    <div>
                        <label for="dimensions" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Dimensions</label>
                        <select name="dimensions" id="dimensions-select" class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700">
                            <option value="">--Please choose an option--</option>
                            <option value="24in x 36in">24in x 36in</option>
                            <option value="12in x 16in">12in x 16in</option>
                            <option value="8in x 10in">8in x 10in</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="is_available" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Status</label>
                        <select name="is_available" id="is-available-select" class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700">
                            <option value="">--Please choose an option--</option>
                            <option value="1">Available</option>
                            <option value="0">Sold Out</option>
                        </select>        
                    </div>

                    <div class="md:col-span-2">
                        <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Artwork Image</label>
                        <input class="w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 dark:bg-gray-700" type="file" name="image" id="image" accept="image/*" required />
                        <p class="text-sm text-gray-500 mt-1">Upload a high-quality image of your artwork</p>
                    </div>
                </div>

                <div class="flex justify-end mt-6">
                    <button class="px-4 py-2 rounded-md bg-black text-white hover:bg-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">Upload</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
