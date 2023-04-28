<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Jardin;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plantes = Plant::with('jardins')->get();
        // dd($plantes[0]->jardins);
        return view('plante.index', compact('plantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlantRequest $request)
    {
        $plante =  new Plant();

        $plante->name = $request->name;
        $plante->origin = $request->origin;
        $plante->price = $request->price;
        
        $plante->save();

        return redirect('plante')->with('message', 'Plante Has Been Added Seccessful');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $plante = Plant::find($id);
        return view('plante.show')->with('plante', $plante);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlantRequest $request, Plant $plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        //
    }
}
