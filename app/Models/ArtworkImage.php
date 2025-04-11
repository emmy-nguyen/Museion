<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtworkImage extends Model
{
   use HasFactory;
   protected $fillable = [
    'artwork_id',
    'image_path',
    'is_primary',
   ];
   public function artwork() 
   {
        return $this->belongsTo(Artwork::class);
   }
}
