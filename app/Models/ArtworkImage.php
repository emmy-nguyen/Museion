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
        return $this->belongsTo(Artwork::class, 'art_work_id');
   }
   public function getImageUrlAttribute()
   {
      return Storage::disk('s3')->url($this->image_path);
   }
}
