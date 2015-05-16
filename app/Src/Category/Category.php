<?php namespace App\Src\Category;

use App\Core\BaseModel;

class Category extends BaseModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
