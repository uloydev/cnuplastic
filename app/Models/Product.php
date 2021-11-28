<?php

namespace App\Models;

use App\Traits\ByUserId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, ByUserId;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'product_category_id',
        'is_promo',
        'is_best_seller',
    ];

    protected $casts = [
        'is_promo' => 'boolean',
    ];

    protected $with = ['productCategory'];

    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }
}
