<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\ArtworkImage;
use App\Models\Category;


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
    function create() {
        $categories = Category::all();
        return view('artworks.create', compact('categories'));
    }
    function store(Request $request) {
        \Log::debug($request->all());

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'medium' => 'required|string|max:100',
            'price' => 'required|int',
            'dimensions' => 'required|string|max:100',
            'year_created' => 'required|string|max:10',
            'is_available' => 'required|boolean',
            'image' => 'required|image|max:10240',
        ]);

        $artwork = new Artwork();
        $artwork->user_id = Auth::id();
        $artwork->title = $validated['title'];
        $artwork->description = $validated['description'];
        $artwork->category_id = $validated['category_id'];
        $artwork->medium = $validated['medium'];
        $artwork->price = $validated['price'];
        $artwork->dimensions = $validated['dimensions'];
        $artwork->year_created = $validated['year_created'];
        $artwork->is_available = $validated['is_available'];

        $artwork->save();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->putFileAs(
                'artwork-images',
                $file,
                $filename,
                'public'
            );
            $url = Storage::disk('s3')->url($path);


            $artwork->images()->create([
                'image_path' => $url,
                'is_primary' => true,
            ]);

        }

        return redirect()->route('artworks.detail', ['id' => $artwork->id])->with('success', "Artwork uploaded successfully!");
    }
}
