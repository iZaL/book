<?php namespace App\Src\Book;

use App\Core\BaseModel;

class Book extends BaseModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'books';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
