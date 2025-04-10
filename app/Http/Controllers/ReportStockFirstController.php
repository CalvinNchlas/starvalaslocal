<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportStockFirstController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('cms.reportstockfirst.index');
    }
}
