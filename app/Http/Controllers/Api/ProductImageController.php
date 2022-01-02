<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductImageRequest;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->model = ProductImage::class;
        $this->modelRequest = new ProductImageRequest();
    }
    public function index($id)
    {
        $product = Product::where('id', $id)->with('images')->first();
        if (is_null($product)) {
            return response()->json(
                ['error' => 'Resource not found'],
                404
            );
        }
        return response()->json(
            $product,
            200
        );
    }

    public function store($id, Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            $this->modelRequest->rules()
        );
        $resources = [];

        if ($validator->fails()) {
            return response()->json(
                ['error' => $validator->errors()],
                406
            );
        }

        $product = Product::where('id', $id)->with('images')->first();
        if (is_null($product)) {
            return response()->json(
                ['error' => 'Resource not found'],
                404
            );
        }
        foreach ($request->resources as $dataResource) {
            $product->images()->create($dataResource);
        }
        $product = Product::where('id', $id)->with('images')->first();
        return response()->json(
            $product,
            201
        );
    }

    public function deleteAll($id, Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            ['deleteAll' => 'required|boolean']
        );

        if ($validator->fails()) {
            return response()->json(
                ['error' => $validator->errors()],
                406
            );
        }
        if (!request('deleteAll')) {
            return response()->json(
                ['error' => 'Not Authorized'],
                405
            );
        }

        ProductImage::where('product_id', $id)->delete();

        $product = Product::where('id', $id)->with('images')->first();
        if (is_null($product)) {
            return response()->json(
                ['error' => 'Resource not found'],
                404
            );
        }
        return response()->json(
            $product,
            201
        );
    }
    public function delete($id, $imageId)
    {
        $image = ProductImage::where('id', $imageId)->where('product_id', $id)->first();
        if (is_null($image)) {
            return response()->json(
                ['error' => 'Resource not found'],
                404
            );
        }
        $image->delete();
        $product = Product::where('id', $id)->with('images')->first();
        if (is_null($product)) {
            return response()->json(
                ['error' => 'Resource not found'],
                404
            );
        }
        return response()->json(
            $product,
            201
        );
    }
}
