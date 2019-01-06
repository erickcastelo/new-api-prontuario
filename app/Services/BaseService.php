<?php

namespace App\Services;


class BaseService
{
    protected $modelClass;

    public function __construct($modelClass)
    {
        $this->modelClass = $modelClass;
    }

    public function all()
    {
        $classname = $this->modelClass;

        return $classname::all();
    }

    public function create($request)
    {
        $classname = $this->modelClass;

        $classname::create($request->all());
    }

    public function update($request, $id)
    {
        $model = $this->findOne($id);
        $model->update($request->all());
    }

    public function delete($id)
    {
        $model = $this->findOne($id);
        $model->delete();
    }

    public function getById($id)
    {
        return $this->findOne($id);
    }

    private function findOne($id)
    {
        $classname = $this->modelClass;
        return $classname::findOrFail($id);
    }

    public function getClassModel()
    {
        return $this->modelClass;
    }
}