<?php

namespace App\Http\Controllers\Api;

use Validator;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{
    protected $model;
    protected $modelRequest;

    public function index()
    {
        return $this->model::get();
    }

    public function store(Request $request)
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
        $slugify = new Slugify();
        foreach ($request->resources as $dataResource) {
            if (array_key_exists('slug', $dataResource)) {
                $dataResource['slug'] = $slugify->slugify($dataResource['slug']);
            }
            $resource = $this->model::create($dataResource);
            array_push($resources, $resource);
        }
        return response()->json(
            $resources,
            201
        );
    }

    public function show($id)
    {
        $resource = $this->model::find($id);

        if (is_null($resource)) {
            return response()->json(
                ['error' => ' Resource not found'],
                404
            );
        }
        return response()->json(
            $resource,
            200
        );
    }

    public function update($id, Request $request)
    {
        $resource = $this->model::find($id);
        if (is_null($resource)) {
            return response()->json(
                ['error' => 'Resource not found'],
                404
            );
        }

        $validator = Validator::make(
            $request->all(),
            $this->modelRequest->rules()
        );

        if ($validator->fails()) {
            return response()->json(
                ['error' => $validator->errors()],
                406
            );
        }
        $slugify = new Slugify();
        $dataResource = $request->all();
        if (array_key_exists('slug', $dataResource)) {
            $dataResource['slug'] = $slugify->slugify($dataResource['slug']);
        }

        $resource->fill($dataResource);
        $resource->save();

        return response()->json(
            $resource,
            200
        );
    }
}
