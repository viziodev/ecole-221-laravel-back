<?php

namespace App\Http\Controllers;

use App\Http\Requests\NiveauStoreRequest;
use App\Http\Resources\NiveauResource;
use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    public function index(){
         return NiveauResource::collection(Niveau::with("cycle")->get());
       // return Niveau::with("cycle")->get();
       //return Niveau::all();
    }

    public function show(Niveau $niveau){
        // return new NiveauResource($niveau->load("cycle"));
           return  NiveauResource::make($niveau->load("cycle"));
         //return $niveau;
    }

   

    public function store(NiveauStoreRequest $request){
          return Niveau::create($request->all());
    }
}