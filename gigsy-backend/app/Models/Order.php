<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'amount',
        'end_date',
        'status',
        'service_id',
        'buyer_id'
    ];

    public function buyer()
    {
        return $this->belongsTo(Seller::class, 'buyer_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
