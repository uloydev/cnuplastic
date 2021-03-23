<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'merchandise_category_id',
        'whatsapp'
    ];

    protected $with = ['merchandiseCategory'];

    public function merchandiseCategory()
    {
        return $this->belongsTo('App\Models\MerchandiseCategory');
    }
}
