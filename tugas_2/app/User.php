<?php

namespace App;

use App\Traits\UsesUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, UsesUuid;

    protected function get_admin_id(){
        $role = \App\Role::where('name', 'user')->first();
        return $role->id;
    }

    public static function boot(){
        parent::boot();

        static::creating(function ($model) {
            $model->role_id = $model->get_admin_id();
        });
    }

    public function role() {
        return $this->hasMany(Role::class);
    }

    public function otpVode() {
        return $this->hasOne(OtpCode::class);
    }
    
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
}
