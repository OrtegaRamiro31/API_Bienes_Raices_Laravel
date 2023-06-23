<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertyCollection;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $properties = Property::all();
        // $properties = Property::orderBy('id', 'DESC')->paginate(5);
        // return response()->json($properties);
        // Get all registers order by id. Pagitation 5
        return new PropertyCollection(Property::orderBy('id', 'DESC')->paginate(5));
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
    public function show(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
    }
}
