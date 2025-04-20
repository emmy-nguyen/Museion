<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="grid md:grid-cols-3 grid-cols-1 gap-5">
            <div class="md:col-span-2">
                <img 
                        src="{{ $artwork->primaryImage ? $artwork->primaryImage->image_path : '/images/placeholder.jpg' }}" 
                        alt="{{ $artwork->title }}" 
                        class="w-full h-auto object-cover rounded-lg shadow-md"
                >
            </div>
            <div class="md:col-span-1">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">{{ $artwork->title }}</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Artist: {{ $artwork->user->name }}</p>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Description</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $artwork->description }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Category</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $artwork->category->name }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Year</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $artwork->year_created }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Status</h3>
                    @if($artwork->is_available == 1)
                    <p class="text-gray-600 dark:text-gray-400">Available</p>
                    @else
                    <p class="text-gray-600 dark:text-gray-400">Sold Out</p>
                    @endif
                </div>
            </div>
            
        </div>
        <div class="mt-6">
                    <a href="{{ route('artworks') }}" class="text-blue-600 dark:text-white hover:underline">← Back to all artworks</a>
            </div>
    </div>
    <div>
</x-app-layout>