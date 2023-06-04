<?php

namespace App\Services;

class BumilService
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function store($attributes)
    {
        return $this->model->create($attributes);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function Query()
    {
        return $this->model->query();
    }
}
