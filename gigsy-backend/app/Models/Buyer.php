<?php

namespace App\Models;

use App\Models\Traits\Userable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory, Userable;

    protected $userable = [];

    protected $fillable = ['status'];

    protected $with = ['user'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
