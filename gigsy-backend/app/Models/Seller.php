<?php

namespace App\Models;

use App\Models\Traits\Userable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

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
        $services = Service::where("seller_id", $this->id)->pluck("id")->toArray();
        Log::alert($services);
        Log::alert($this->id);
        return Order::whereIn("service_id", $services)->count();
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
