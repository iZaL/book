<?php
/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 5/30/15
 * Time: 1:47 AM
 */

namespace App\Core;


Abstract class AbstractRepository {

    public $model;

    public function getAll() {
        return $this->model->all();
    }

    public function getById($id) {
        return $this->model->find($id);
    }

}