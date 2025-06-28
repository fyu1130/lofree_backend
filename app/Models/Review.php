<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'rating',
        'comment',
    ];

    protected $hidden = [];

    protected $casts = [];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
