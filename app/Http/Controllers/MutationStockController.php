<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MutationStockController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cms.mutationstock.index');
    }
}
