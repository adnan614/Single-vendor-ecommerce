<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categoryRelation()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function brandRelation()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
}
