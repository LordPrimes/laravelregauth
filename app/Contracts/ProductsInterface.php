<?php

namespace App\Contracts;

interface ProductsInterface 
{
    public function show(): object;

    public function create(array $data): array; 

    public function update(array $data);

    public function delet($id);


}