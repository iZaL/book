<?php namespace App\Src\Book;

use App\Core\BaseModel;
use App\Core\LocaleTrait;

class Book extends BaseModel
{

    use LocaleTrait;
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

    protected $localeStrings = ['title'];
}
