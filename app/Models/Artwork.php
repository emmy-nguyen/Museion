<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    /** @use HasFactory<\Database\Factories\ArtworkFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'category_id',
        'medium',
        'price',
        'dimensions',
        'year_created',
        'is_available'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function images() {
        return $this->hasMany(ArtworkImage::class);
    }
    public function primaryImage() {
        return $this->hasOne(ArtworkImage::class)->where('is_primary', true);
    }
}
