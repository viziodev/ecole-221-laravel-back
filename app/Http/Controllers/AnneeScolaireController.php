<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnneeScolaire;
use Illuminate\Support\Facades\DB;

class AnneeScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return AnneeScolaire::all();
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        try {
            DB::beginTransaction();
            AnneeScolaire::where("etat",true)->update([
            "etat"=>false
         ]);
            AnneeScolaire::where("id",$id)->update([
                "etat"=>true,
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
       
      
       return $this->anneeEncours();
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function anneeEncours()
    {

        return AnneeScolaire::where("etat",true)->first();
    }
}