<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\ArtworkImage;

class ArtworkController extends Controller
{
    function all() {
        $artworks = Artwork::all();
        return view('artworks.all', ['artworks' => $artworks]);
    }
    function find($id) {
        $artwork = Artwork::find($id);
        if($artwork) {
            return view('artworks.detail', ['artwork' => $artwork]);
        } else {
            return redirect()->route('artworks')->with('error', 'Artwork not found');
        }
    }
}
