<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Userable;

class Admin extends Model
{
    use HasFactory, Userable;

    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}
