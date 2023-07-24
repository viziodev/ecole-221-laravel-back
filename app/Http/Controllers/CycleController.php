<?php

namespace App\Http\Controllers;

use App\Http\Requests\CycleStoreRequest;
use App\Http\Resources\CycleResource;
use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has("join") && $request->join=="niveaux"){
            return CycleResource::collection(Cycle::with($request->join)->get());
           /*return Cycle::with([$request->join=>function($query){
                  return $query-> select("id","libelle");
             }])->get();*/
        }
        return Cycle::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CycleStoreRequest $request)
    {
        return Cycle::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Cycle::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}