<?php

namespace App\Contracts;

interface ProductsInterface 
{
    public function show(): object;

    public function create(array $data); 

    public function update($data);

    public function delet($id);


}