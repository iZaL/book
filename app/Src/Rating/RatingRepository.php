<?php namespace App\Src\Rating;

use App\Core\BaseRepository;

class RatingRepository extends BaseRepository
{
    /**
     * Construct
     * @param Rating $model
     */
    public function __construct(Rating $model)
    {
        $this->model = $model;
    }

}