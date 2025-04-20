<?php

namespace App\Livewire;

use App\Models\Artwork;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;


class ArtworksList extends Component
{
    use WithPagination;
    public $search = '';
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $selectedCategory = null;

    protected $queryString = ['search', 'sortField', 'sortDirection', 'selectedCategory'];

    public function updatingSearch()
    {
        $this->resetPage();
        $this->selectedCategory = null;
    }
    public function filterByCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->search = '';
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }


    public function render()
    {
        $query = Artwork::query();

        $searchTerm = trim($this->search);

        if(strlen($searchTerm) >=1) {
            $query->where(function ($q) use($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                  ->orWhere('description', 'like', "%{$searchTerm}%");
            });            
        }

        if($this->selectedCategory)
        {
            $query->where('category_id', $this->selectedCategory);
        }
        $artworks = $query->with('primaryImage', 'user')
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->paginate(12);

        $categories = Category::all();


        return view('livewire.artworks-list', [
            'artworks' => $artworks,
            'categories' => $categories,
        ]);
    }
}
