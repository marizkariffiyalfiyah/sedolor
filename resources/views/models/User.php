<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role', 'phone'];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return ['email_verified_at' => 'datetime', 'password' => 'hashed'];
    }

    public function businessActor()
    {
        return $this->hasOne(BusinessActor::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function accessibilitySetting()
    {
        return $this->hasOne(AccessibilitySetting::class);
    }

    public function isVerifikator(): bool
    {
        return $this->role === 'verifikator';
    }
}
