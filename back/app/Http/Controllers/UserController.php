<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//    public  function index()
//    {
//        return view('users');
//
//    }
//
//    public function addUser(Request $request)
//    {
//        $user = new User();
//        $user->fill($request->all()); //kjo i mbush te gjitha vlerat
////     $user->password = Hash::make($request->password);
//        $user->save();
//        return response()->json('User successfully add!');
//    }
    public function index()
    {
        $user = User::all();

        return response()->json(
            [
                'status' => 'success',
                'users' => $user->toArray()
            ], 200);
    }
    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return response()->json(
            [
                'status' => 'success',
                'user' => $user->toArray()
            ], 200);
    }

}

