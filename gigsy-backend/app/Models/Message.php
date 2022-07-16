<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'bayer_id',
        'seller_id',
        'service_id',
        'seen',
    ];

    public function bayer()
    {
        return $this->belongsTo(Seller::class, "bayer_id");
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, "seller_id");
    }
}
