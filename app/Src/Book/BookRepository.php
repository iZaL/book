<?php namespace App\Src\Book;

use App\Core\BaseRepository;

class BookRepository extends BaseRepository
{

    public $model;

    /**
     * Construct
     * @param Book $model
     */
    public function __construct(Book $model)
    {
        $this->model = $model;
    }

}