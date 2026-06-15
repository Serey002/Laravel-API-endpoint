<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'image',
        'price',
        'stock',
        'is_active'
    ];

    protected $casts = [
        'price' => 'float',
        'stock' => 'integer',
        'is_active' => 'boolean'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $appends = ['image_url'];

    public function getImageUrlAttribute(){
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return null;
    }
}
