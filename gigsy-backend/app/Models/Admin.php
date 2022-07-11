<?php

namespace App\Models;

use App\Models\Traits\Userable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory, Userable;

    protected $userable = [];

    protected $with = ['user'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function delete()
    {
        $this->user()->delete();
        parent::delete();
    }
}
