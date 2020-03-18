<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

/**
 * Class Role
 * @package App\Models
 * @version March 11, 2020, 8:44 am UTC
 *
 */
class Role extends Model
{
    const SLUG_ADMIN = 'admin';
    const SLUG_MODERATOR = 'moderator';
    const SLUG_USER = 'user';
    const SLUG_SUPPORT = 'support';
    const SLUG_SEO = 'seo';

    protected $fillable = [
        'name',
        'slug',
    ];


    public static function idBySlug($slug)
    {
        if ($role = self::where('slug', $slug)->first()) {
            return $role->id;
        }

        return 0;
    }

    public static function rules($id = null)
    {
        return [
            'name' => 'required',
            'slug' => [
                'required',
                Rule::unique('roles', 'slug')->ignore($id, 'id')
            ],
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id' );
    }
}
