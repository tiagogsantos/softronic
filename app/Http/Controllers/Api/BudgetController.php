<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Budget;

class BudgetController extends Controller
{
    public function index()
    {
        $resources = Budget::with(['items'])->get();
        return response()->json($resources);
    }
}
