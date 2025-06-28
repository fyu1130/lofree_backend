<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    protected $hidden = [];

    protected $casts = [];


    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
