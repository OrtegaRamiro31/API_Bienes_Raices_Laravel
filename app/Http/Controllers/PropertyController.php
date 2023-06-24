<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Http\Resources\PropertyCollection;
use App\Http\Resources\PropertyResource;
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
        return new PropertyCollection(Property::orderBy('id', 'DESC')->paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyRequest $request)
    {
        $property = new Property;
        $property->title = $request->title;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->wc = $request->wc;
        $property->parking = $request->parking;
        $property->rooms = $request->rooms;

        $property->save();
        return response()->json($property);
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
    //    return Property::find($property->id);
        return new PropertyResource($property);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $property->title = $request->input('title', $property->title);
        $property->price = $request->input('price', $property->price);
        $property->description = $request->input('description', $property->description);
        $property->wc = $request->input('wc', $property->wc);
        $property->parking = $request->input('parking', $property->parking);
        $property->rooms = $request->input('rooms', $property->rooms);

        $property->save();

        return new PropertyResource($property);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        if ($property->delete()) {
            return response()->json([
                'msg' => 'Propiedad eliminada correctamente',
            ]);
        } else {
            return response()->json([
                'msg' => 'No se pudo eliminar la propiedad',
            ], 500);
        }
    }
}
