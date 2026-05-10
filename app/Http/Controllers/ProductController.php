<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\FormRequest;
use App\Http\Requests\Product\PaginatedRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(PaginatedRequest $request): ProductResource
    {
        $filter = $request->getFilter();

        return new ProductResource(Product::all());
    }

    public function store(FormRequest $request): ProductResource
    {
        return new ProductResource(Product::create($request->validated()));
    }

    public function show(Product $product): ProductResource
    {
        return new ProductResource($product);
    }

    public function update(FormRequest $request, Product $product): ProductResource
    {
        $product->update($request->validated());

        return new ProductResource($product);
    }

    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json();
    }
}
