<?php

namespace App\Http\Controllers\Admin\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Exception;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        try{
            $products = Product::latest()->get();
            return sendSuccess('Successfully show Product list', $products, 200);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    public function store(ProductRequest $request)
    {
        try{
            $product = Product::create($request->all());
            return sendSuccess('Product added successfully', $product, 200);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }

    }

    public function show($id)
    {
        try{
            $product = Product::findOrFail($id);
            return sendSuccess('Successfully show Product', $product, 200);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }

    }

    public function update(ProductRequest $request, Product $product)
    {
        try{
            //$product = Product::findOrFail($id);
            $product->update($request->all());

            return sendSuccess('Product updated successfully', $product, 200);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }

    }

    public function destroy($id)
    {
        try{
            Product::destroy($id);
            return sendSuccess('Product deleted successfully', '', 204);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }
}
