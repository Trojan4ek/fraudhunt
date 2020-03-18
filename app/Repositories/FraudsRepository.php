<?php

namespace App\Repositories;

use App\Models\Frauds;
use App\Repositories\BaseRepository;

/**
 * Class FraudsRepository
 * @package App\Repositories
 * @version March 11, 2020, 3:08 pm UTC
*/

class FraudsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Frauds::class;
    }
}
