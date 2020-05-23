<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements MustVerifyEmail, JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'username',
        'phone',
        'password',
        'bio',
        'gender',
        'dob',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles')->withTimestamps();
    }

    public function getVerificationUrl(): string
    {
        $expiration = strtotime('+2 hours');
        return route('auth.register.verify', ['code' => encrypt($this->id . '_' . $this->email . '_' . $expiration)]);
    }

    public function verifyCode($code)
    {
        try {
            $decryptedCode = decrypt($code);
            list($id, $email, $expirationTime) = explode('_', $decryptedCode);
            $user = self::find($id);

            if (!empty($user) && $user->email === $email && time() < $expirationTime) {
                return $user;
            }

            return false;

        } catch (\Exception $exception) {
            return false;
        }
    }

    public function name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function profileImage()
    {
        return $this->image;
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }


}
