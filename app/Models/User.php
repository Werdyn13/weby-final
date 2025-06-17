<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    // Add any necessary properties or methods here

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (is_null($user->role)) {
                $user->role = 'user';
            }
        });
    }
}
