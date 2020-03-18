<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Rule;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_ID = 1;

    private static $rules;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string'
    ];

    public static function rules($id = null)
    {
        return [
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users', 'email')->ignore($id, 'id')
            ],
        ];
    }

    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function addRole($role)
    {
        if (is_int($role)) {
            $this->roles()->attach($role);
        } else if($id = Role::idBySlug($role)) {
            $this->roles()->attach($id);
        }
    }

    public function inRole($roles)
    {
        return $this->roles()->whereIn('slug', (array)$roles)->exists();
    }
}
