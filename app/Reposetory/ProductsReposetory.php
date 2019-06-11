<?php

namespace App\Reposetory;

use App\Contracts\ProductsInterface;
use Illuminate\Database\Eloquent\Model;

class ProductsReposetory implements ProductsInterface 
{
    
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function show(): object
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($data)
    {
        return $this->model->where('id', $data)->update($data);
    }

    public function delet($id)
    {
        return $this->model->delete($id);
    }
}