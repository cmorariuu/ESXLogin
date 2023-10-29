<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsPageController extends Controller
{
    /**
     * Display the cars page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('cars');
    }

    /**
     * Filter the data based on the provided filter value.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function filterData(Request $request)
    {
        $request->validate([
            'filter_value' => ['required', 'string', 'max:255'],
        ]);

        $filterValue = $request->input('filter_value');

        $filteredData = Cars::where('carModel', 'LIKE', "%$filterValue%")->get();

        return response()->json($filteredData);
    }
}
