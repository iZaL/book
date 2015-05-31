<?php
namespace App\Core;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use StdClass;
use Illuminate\Support\MessageBag;
abstract class BaseRepository
{

    public function getAll() {
        return $this->model->all();
    }

    public function getById($id) {
        return $this->model->find($id);
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        $categoryRepository = App::make('App\Src\Category\CategoryRepository');
        $transactionModel = new \ReflectionClass($this->model);
        return $categoryRepository->model->where('name',ucfirst($transactionModel->getShortName()))->first();
    }
}