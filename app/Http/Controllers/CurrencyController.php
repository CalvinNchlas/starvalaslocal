<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:currencies.viewAny')->only(['index', 'datatable', 'show']);
        $this->middleware('can:currencies.create')->only(['create', 'store']);
        $this->middleware('can:currencies.update')->only(['edit', 'update']);
        $this->middleware('can:currencies.delete')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cms.currency.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        return view('cms.currency.show', compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Currency $currency)
    {
        return view('cms.currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Currency $currency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Currency deleted successfully.'
        ]);
    }

    /**
     * Display a listing of the resource in datatable format.
     */
    public function datatable(Request $request)
    {
        $query = Currency::select([
            'id',
            'flag',
            'currency',
            'name',
            'denomination',
            'buy_rate',
            'sell_rate',
            'mid_rate',
            'max_addition',
            'max_reduction'
        ]);

        return datatables()
            ->of($query)
            ->editColumn('buy_rate', function ($row) {
                return number_format($row->buy_rate, 2, ',', '.');
            })
            ->editColumn('sell_rate', function ($row) {
                return number_format($row->sell_rate, 2, ',', '.');
            })
            ->editColumn('mid_rate', function ($row) {
                return number_format($row->mid_rate, 2, ',', '.');
            })
            ->editColumn('max_addition', function ($row) {
                return number_format($row->max_addition, 2, ',', '.');
            })
            ->editColumn('max_reduction', function ($row) {
                return number_format($row->max_reduction, 2, ',', '.');
            })
            ->addColumn('actions', function ($row) {
                return view('partials.datatables.actions', [
                    'showRoute' => route('currency.show', $row->id),
                    'editRoute' => route('currency.edit', $row->id),
                    'deleteRoute' => route('currency.destroy', $row->id),
                ])->render();
            })
            ->rawColumns(['actions', 'flag'])
            ->editColumn('flag', function ($row) {
                return '<img src="' . asset($row->flag) . '" alt="Flag" width="50" height="30">';
            })
            ->make(true);
    }
}
