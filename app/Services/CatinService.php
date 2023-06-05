<?php

namespace App\Services;

class CatinService
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function get()
    {
        return $this->model->get();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store($attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, $data)
    {
        $model = $this->model->find($id);
        $model->update($data);
        return $model;
    }

    public function Query()
    {
        return $this->model->query();
    }
}
