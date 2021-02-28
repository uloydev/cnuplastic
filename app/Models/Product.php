<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'product_category_id',
        'user_id',
    ];

    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
