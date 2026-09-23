<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

<<<<<<< HEAD
#[Fillable(['name', 'email', 'password', 'role'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
=======
class User extends Authenticatable implements MustVerifyEmail
>>>>>>> 12ded19613921a8d46eb44987fdea92e7d2cb0d5
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Atribut yang boleh diisi melalui mass assignment.
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',
    ];

    /**
     * Atribut yang disembunyikan saat model diubah menjadi array/JSON.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Relasi User dengan Product.
     * Satu user dapat memiliki banyak produk.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
<<<<<<< HEAD
     * Cek apakah user memiliki peran sebagai verifikator/admin.
     */
    public function isVerifikator(): bool
    {
        return isset($this->role) && in_array($this->role, ['verifikator', 'admin']);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
=======
     * Mengecek apakah user merupakan verifikator.
     */
    public function isVerifikator(): bool
    {
        return $this->role === 'verifikator';
    }

    /**
     * Attribute casting.
>>>>>>> 12ded19613921a8d46eb44987fdea92e7d2cb0d5
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}