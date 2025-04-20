<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                All Artworks
            </h2>
        </x-slot>            
        @livewire('artworks-list')
    </div>
</x-app-layout>