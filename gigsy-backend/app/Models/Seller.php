<?php

namespace App\Models;

use App\Models\Traits\Userable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory, Userable;

    protected $userable = [];

    protected $with = ['user'];

    protected $appends = [
        'total_cart',
        'total_message',
        'total_notification',
        'status_name'
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function getTotalCartAttribute()
    {
        return 0;
    }

    public function getTotalMessageAttribute()
    {
        return 0;
    }

    public function getTotalNotificationAttribute()
    {
        return 0;
    }

    public function getStatusNameAttribute()
    {
        return "Nouvel utilisateur";
    }
}
