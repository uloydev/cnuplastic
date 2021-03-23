<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchandiseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image'
    ];

    public function merchandises()
    {
        return $this->hasMany('App\Models\Merchandise');
    }
}
