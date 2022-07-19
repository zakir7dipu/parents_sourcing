<?php namespace Zak\Slider\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zak_slider_ps';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
