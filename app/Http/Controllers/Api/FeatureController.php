<?php

namespace App\Http\Controllers\Api;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Http\Controllers\Api\BaseApiController;

class FeatureController extends BaseApiController
{
    public function __construct()
    {
        $this->model = Feature::class;
        $this->modelRequest = new FeatureRequest();
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
        $features = $resource->features()->get();
        foreach($features as $feature){
            $feature->products()->sync([]);
            $feature->delete();
        }
        $isRemoved = $resource->delete();

        if ($isRemoved) {
            return response()->json(
                ['success' => 'Resource successfully removed'],
                200
            );
        }
        dd($resource);
    }
}
