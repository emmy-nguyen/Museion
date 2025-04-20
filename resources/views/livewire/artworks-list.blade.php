<div>

    <!--search-->
    <div>
        <div class="mb-8">
            <input wire:model.live="search" type="text" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search Artworks by Title or Description...">
    </div>

    <!--category tab-->
    <div class="flex flex-wrap gap-2 justify-center mb-6">
        <button wire:click="filterByCategory(null)" class="rounded-full px-4 py-2 text-sm uppercase font-medium {{ is_null($selectedCategory) ? 'bg-[#c9a050]' : 'bg-[#191913] text-white hover:bg-[#191913]/90' }}">All</button>
        
        @foreach($categories as $category)
            <button wire:click="filterByCategory({{ $category->id }})" class="rounded-full px-4 py-2 text-sm uppercase font-medium {{ $selectedCategory === $category->id ? 'bg-[#c9a050]' : 'bg-[#191913] text-white hover:bg-[#191913]/90' }}">{{ $category->name }}</button>
        @endforeach
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-8">
        @forelse($artworks as $artwork)
        <div class="bg-[#eeede0] rounded-lg shadow overflow-hidden">
                    <img 
                        src="{{ $artwork->primaryImage ? $artwork->primaryImage->image_path : '/images/placeholder.jpg' }}" 
                        alt="{{ $artwork->title }}" 
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $artwork->title }}</h3>
                        <p class="text-gray-600">{{ $artwork->user->name }}</p>
                        <a href="/artworks/{{ $artwork->id }}" class="mt-2">
                        
                                View details →
                    
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">No Artworks found. Try adjusting your search.</p>
                </div>
            @endforelse
            </div>
        
        <!-- Pagination -->
        <div class="mt-8">
            {{ $artworks->links() }}
        </div>
    </div>
    </div>
</div>
