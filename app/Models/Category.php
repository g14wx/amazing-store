<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models
 * @version September 12, 2024, 5:24 am UTC
 *
 * @property string $title
 * @property string $description
 * @property string $img
 */
class Category extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
