<?php namespace App\Src\Book;

use App\Core\BaseModel;

class BookMeta extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'book_metas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];


}
