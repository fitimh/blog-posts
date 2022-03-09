<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public  function index()
    {
        return view('users');
    }
    
    public function addUser(Request $request)
    {
        $user = new User();
        $user->fill($request->all()); //kjo i mbush te gjitha vlerat
//     $user->password = Hash::make($request->password);
        $user->save();
        return response()->json('User successfully add!');
    }

}
