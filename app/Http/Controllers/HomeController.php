<?php

namespace App\Http\Controllers;
use App\Models\Artwork;

class HomeController extends Controller
{
    public $heroBannerArtwork;
    public $featuredArtworks;

    public function __construct() {
        $this->heroBannerArtwork = Artwork::inRandomOrder()->first();
        $this->featuredArtworks = Artwork::inRandomOrder()->limit(6)->get();
        
    }
    public function render()
    {
        return view('welcome', [
            'heroBannerArtwork' => $this->heroBannerArtwork,
            'featuredArtworks' => $this->featuredArtworks
        ]);
    }
}
