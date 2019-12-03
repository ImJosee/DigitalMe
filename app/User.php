<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Post;
use App\NormalUser;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function getFullName():String {
        return $this->name . ' ' . $this->last_name();
    }

    /*public function getRouteKeyName() {
        return 'name';
    }*/

    public function last_name() {
        return $this->getNormalUser != null ? $this->getNormalUser->last_name : '';
    }

    public function getType() {
        return $this->user_type;
    }

    public function posts() {
        return $this->hasMany(Post::class, 'user_id');
    }

    public function follows() {
        return $this->belongsToMany(User::class, 'follows', 'follower_id', 'user_id');
    }

    public function followers() {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'follower_id');
    }

    public function getNormalUser() {
        return $this->hasOne(NormalUser::class, 'user_id');
    }
}
