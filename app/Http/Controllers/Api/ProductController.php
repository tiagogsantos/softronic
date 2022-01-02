<?php

namespace App\Http\Controllers\Api;

use App\Models\Feature;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Api\BaseApiController;
use Illuminate\Support\Facades\Validator;

class ProductController extends BaseApiController
{
    public function __construct()
    {
        $this->model = Product::class;
        $this->modelRequest = new ProductRequest();
    }

    public function delete($id)
    {
        $resource = $this->model::find($id);
        if (is_null($resource)) {
            return response()->json(
                ['error' => ' Resource not found'],
                404
            );
        }
        $resource->categories()->sync([]);
        $resource->images()->delete();
        $isRemoved = $resource->delete();

        if ($isRemoved) {
            return response()->json(
                ['success' => 'Resource successfully removed'],
                200
            );
        }
    }

    public function getCategory($id)
    {
        $product = $this->model::where('id', $id)->with('categories')->first();
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
    public function setCategory($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'present|array'
        ]);
        if ($validator->fails()) {
            return response()->json(
                ['error' => $validator->errors()],
                406
            );
        }
        $product = $this->model::where('id', $id)->first();

        $categories = Category::whereIn('id', $request->category_id)->pluck('id')->toArray();
        $product->categories()->sync($categories);
        $product = $this->model::where('id', $id)->with('categories')->first();

        return response()->json(
            $product,
            201
        );
    }

    public function setFeature($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'feature_id' => 'present|array'
        ]);
        if ($validator->fails()) {
            return response()->json(
                ['error' => $validator->errors()],
                406
            );
        }

        $product = $this->model::where('id', $id)->first();


        $features = Feature::whereIn('id', $request->feature_id)->whereNotNull('feature_id')->pluck('id')->toArray();
        $product->features()->sync($features);
        $product = $this->model::where('id', $id)->with('features')->first();

        return response()->json(
            $product,
            201
        );
    }

    public function getFeature($id)
    {
        $product = $this->model::where('id', $id)->with('features')->first();
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
}
