<?php

namespace App\Livewire;

use App\Models\Artwork;
use Livewire\Component;
use Livewire\WithPagination;


class ArtworksList extends Component
{
    use WithPagination;
    public $search = '';
    public $sortField = 'created_at';
    public $sortDirection = 'desc';

    protected $queryString = ['search', 'sortField', 'sortDirection'];

    public function updatingSearch()
    {
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

        if($this->search) {
            $query->where('title', 'like', "%{{$this->search}}%")
                    ->orwhere('description', 'like', "%{{$this->search}}%");
        }
        $artworks = $query->with('primaryImage', 'user')
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->paginate(12);

        return view('livewire.artworks-list', ['artworks' => $artworks]);
    }
}
