<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Resources\PropertyResource;
use App\Http\Resources\PropertyCollection;
use App\Http\Requests\PropertyCreateRequest;
use App\Http\Requests\PropertyUpdateRequest;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return new PropertyCollection(Property::with('user')->orderBy('id', 'DESC')->paginate(5));
        return new PropertyCollection(Property::orderBy('id', 'DESC')->paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyCreateRequest $request)
    {
        $data = $request->validated();
        
        // Add new property
        $property = Property::create($data);
    
        // Save imagees
        if ($request->hasFile('images')) {

            $imageFiles = $request->file('images');

            foreach ($imageFiles as $image) {
                $imagePath = $image->store('images', 'public');

                // Create image associate with property
                $property->images()->create([
                    'image' => $imagePath
                ]);
            }
        }
    
        // $property->load('images');
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
    public function update(PropertyUpdateRequest $request, Property $property)
    {
        // Validation
        $data = $request->validated();

        $property->fill($data);
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
