<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductsRequest;
use App\Http\Controllers\Controller;
use App\Reposetory\ProductsReposetory;
use App\Products;

class ProductsContrller extends Controller
{
    
    protected $items;

    public function __construct(Products $products)
    {
        $this->items = new ProductsReposetory($products);
    }
    
    public function main()
    {
        
        $all_products = $this->items->show();

        return view('admin')->with('data' ,$all_products);
    }

    public function createProducts(CreateProductsRequest $request)
    {
        $validated = $request->validated();
        
        
        return $this->items->create($validated);
    }

    public function updateProducts(Request $request)
    {
        
        $edit = ['id' => $request->input('id'),
                'desccription' => $request->input('edit'),
    
                ];    

        return $this->items->update($edit);
    }
}
