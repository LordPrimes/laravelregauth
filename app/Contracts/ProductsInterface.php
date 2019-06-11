<?php

namespace App\Contracts;

interface ProductsInterface 
{
    public function show(): array;

    public function create(array $data): array; 

    public function update(array $data): array;

    public function delet($id): array;


}