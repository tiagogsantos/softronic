<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Api\BaseApiController;

class CategoryController extends BaseApiController
{
    public function __construct()
    {
        $this->model = Category::class;
        $this->modelRequest = new CategoryRequest();
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
        $resource->products()->sync([]);
        $isRemoved = $resource->delete();
        
        if ($isRemoved) {
            return response()->json(
                ['success' => 'Resource successfully removed'],
                200
            );
        }
    }
}
