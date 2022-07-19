<?php namespace Zak\Instaphoto\Models;

use Model;

/**
 * Model
 */
class Instagram extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zak_instaphoto_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
