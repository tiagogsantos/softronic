<?php

namespace App\Http\Controllers\Api;

use App\Models\Company;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Controllers\Api\BaseApiController;

class CompanyController extends BaseApiController
{
    public function __construct()
    {
        $this->model = Company::class;
        $this->modelRequest = new CompanyRequest();
    }

    public function index()
    {
        $resources = $this->model::get();
        $resources->map(function ($resource) {
            $resource->url = route('api.company.categories', ['company' => $resource]);
        });
        return $resources;
    }

    public function delete($id)
    {
        $resource = $this->model::find($id);
        if (is_null($resource)) {
            return response()->json(
                ['error' => 'Resource not found'],
                404
            );
        }
        if ($resource->products()->count() > 0) {
            return response()->json(
                ['error' => 'Resource has other linked entities'],
                406
            );
        }
        $isRemoved = $resource->delete();

        if ($isRemoved) {
            return response()->json(
                ['success' => 'Resource successfully removed'],
                200
            );
        }
    }

    public function getCategories(Company $company, Request $request)
    {
        return response()->json(
            $company->categories($request->company_slug),
            200
        );
    }
}
