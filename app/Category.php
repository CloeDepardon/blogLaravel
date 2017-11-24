<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

    /**
     * The table associated with the model
     * @var bool
     */
{
    protected $table = "categories";
    protected $primaryKey = "idcategories";

    /**
     * Indicates if the model should be timestamped
     * @var bool
     */

    public $timestamps = false;
    protected $fillable = ['label'];
}
