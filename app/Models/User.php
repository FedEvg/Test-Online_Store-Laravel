<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\SendVerifyWithQueueNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const ROLE_CLIENT = 0;
    const ROLE_ADMIN = 1;

    public function fullName()
    {
        return $this->name." ".$this->surname." ".$this->patronimic;
    }

    public static function getRoles()
    {
        return [
            self::ROLE_ADMIN => 'Admin',
            self::ROLE_CLIENT => 'Client',
        ];
    }

    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'phone',
        'role_id',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new SendVerifyWithQueueNotification());
    }

    public function likedClothes()
    {
        return $this->belongsToMany(Clothing::class, 'clothing_user_likes', 'user_id', 'clothing_id');
    }

    public function cart()
    {
        return $this->belongsToMany(Clothing::class, 'carts', 'user_id', 'clothing_id');
    }
}
