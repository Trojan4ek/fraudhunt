<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Validation\Rule;

/**
 * Class Frauds
 * @package App\Models
 * @version March 11, 2020, 3:08 pm UTC
 *
 */
class Frauds extends Model
{
    public $table = 'frauds';

    public $fillable = [
        'f_name',
        'description',
        'phone1',
        'phone2',
        'card1'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'f_name' => 'string',
        'description' => 'string',
        'phone1' => 'string|max:10',
        'phone2' => 'string|max:10',
        'card1' => 'string|max:16'
    ];
    public static function rules()
    {
        return [
            'f_name' => 'required',
            'description' => 'required',
            'phone1' => 'required',
        ];
    }

}
