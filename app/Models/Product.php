<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'color',
        'brand_id',
        'category_id',
        'size_id',
        'status',
        'gender_category',
        'season',
        'sku',
        'created_at',
        'price',
        'quantity',
    ];


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function colour()
    {
        return $this->belongsTo(Colour::class);
    }

}
