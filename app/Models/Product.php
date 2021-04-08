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
        'link_shopee',
        'link_tokopedia',
        'link_bukalapak',
        'link_lazada',
        'link_instagram',
    ];

    protected $with = ['productCategory'];

    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function promotions()
    {
        return $this->hasMany('App\Models\Promote');
    }
}
