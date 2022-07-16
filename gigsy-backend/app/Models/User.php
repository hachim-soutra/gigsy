<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'img',
        'description',
        'last_seen',
        'first_name',
        'last_name',
        'email',
        'password',
        'userable_id',
        'userable_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = ['fullname', 'online', 'online_date'];

    protected $dates = ['last_seen'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public function getOnlineAttribute()
    {
        return now()->diffInMinutes($this->last_seen, false) < 2;
    }

    public function getOnlineDateAttribute()
    {
        return $this->last_seen ? $this->last_seen->diffForHumans() : "";
    }

    /**
     * Get the owning userable model.
     */
    public function userable()
    {
        return $this->morphTo();
    }
}
