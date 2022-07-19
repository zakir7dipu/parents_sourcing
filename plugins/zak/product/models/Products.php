<?php namespace Zak\Product\Models;

use Model;

/**
 * Model
 */
class Products extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zak_product_ps';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'product' => ['Zak\Category\Models\Category', 'delete' => true]
    ];
}
