<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Userable;

class Admin extends Model
{
    use HasFactory, Userable;

    protected $userable = [];

    protected $with = ["user"];

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
