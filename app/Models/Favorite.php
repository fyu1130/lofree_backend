<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;

    // factoryとの兼ね合いでtimestampsをfalseに設定
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'product_id',
    ];

    protected $hidden = [];

    protected $casts = [];
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
