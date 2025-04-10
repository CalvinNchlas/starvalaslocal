<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportLabaLossController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cms.reportlabaloss.index');
    }
}
