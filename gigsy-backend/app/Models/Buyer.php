<?php

namespace App\Models;

use App\Models\Traits\Userable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory, Userable;

    protected $userable = [];

    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}
