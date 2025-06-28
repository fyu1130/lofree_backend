<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    // factoryとの兼ね合いでtimestampsをfalseに設定
    public $timestamps = false;

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'product_id',
        'payment_method',
        'delivery_name',
        'postal_code',
        'address',
        'building',
        'phone',
        'status',
    ];

    protected $hidden = [];

    protected $casts = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
