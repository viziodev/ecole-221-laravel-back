<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResourceWeb;
use App\Http\Resources\UserResourcModel;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResourceWeb::collection(User::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $user= User::create($request->only("nom","prenom","email")+[
            "password"=> Hash::make($request->password)
         ]); 
         return  new UserResourceWeb($user) ; 
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    { 
        return new UserResourceWeb($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->only("nom","prenom","email")+[
            "password"=> Hash::make($request->password)
         ]); 
         return  new UserResourceWeb($user) ; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        response(["data"=>null], Response::HTTP_NO_CONTENT);
    }
    public function user(){
        $user=Auth::user();
        return  new UserResourceWeb($user) ; 
    }

    public function updateInfo(Request $request){
        $user=Auth::user();
        $user=User::findOrFail($user->id);
        $user->update($request->only("nom","prenom","email")); 
         return  new UserResourceWeb($user) ; 
         
    }

    public function updatePassword(Request $request){
        $user=Auth::user();
        $user=User::findOrFail($user->id);
        $user->update($request->only("nom","prenom","email")); 
         return  new UserResourceWeb($user) ;  
    }
}