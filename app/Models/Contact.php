<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Validation\Rule;

/**
 * Class Contact
 * @package App\Models
 * @version March 12, 2020, 2:33 pm UTC
 *
 */
class Contact extends Model
{

    public $table = 'contacts';

    public $fillable = [
        'full_name',
        'email',
        'topic',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'full_name' => 'string',
        'email' => 'string',
        'topic' => 'string',
        'body' => 'text'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static function rules($id = null)
    {
        return [
            'full_name' => 'required',
            'topic' => 'required',
            'body' => 'required',
            'email' => [
                'required',
                Rule::unique('contacts', 'email')->ignore($id, 'id')
            ],
        ];
    }


}
