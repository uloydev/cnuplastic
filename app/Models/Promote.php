<?php

namespace App\Models;

use App\Traits\ByUserId;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promote extends Model
{
    use HasFactory, ByUserId;

    protected $fillable = [
        'product_id',
        'user_id',
        'status',
        'promote_start',
        'promote_end',
    ];

    protected $casts = [
        'promote_start' => 'datetime',
        'promote_end' => 'datetime',
    ];
    
    protected $with = ['user', 'product'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
