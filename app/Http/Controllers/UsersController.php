<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // consultar todos los usuarios
    public function index()
    {
        return User::paginate();
    }
    public function show($id){
        return User::find($id);
    }

    public function store(Request $request){
        return User::create($request ->all());

    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return $user;
    }

    public function destroy( $id){
        $user = User::find($id);
        $user->delete();
        return $user;
    }
    
}
