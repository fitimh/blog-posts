<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{
    public function register(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required|min:3|',
            'email' => 'required|email|unique:users',
            'password'=>'required|min:3|confirmed',
        ]);
        if ($v->fails())
        {
            return response()->json([
                'status' => 'error',
                'errors' => $v->errors()
            ], 422);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;

//      $user->password=Hash::make($request->password);
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['status' => 'success'], 200);
    }

    public function login(Request $request) {
        // Check email
        $user = User::where('email', $request['email'])->first();

        // Check password
        if(!$user || !Hash::check($request['password'], $user->password)) {
        return response()->json(['error' => "Email and password combination doesn't match"], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response()->json(['data' => $response, 'success' => "Successfully Logged in!"]);
    }

//    public function login(Request $request)
//    {
//        $credentials = $request->only('email', 'password');
//        if ($token = $this->guard()->attempt($credentials)) {
//            return response()->json(['status' => 'success'], 200)->header('Authorization', $token);
//        }
//        return response()->json(['error' => 'login_error'], 401);
//    }

    public function logout()
    {
        $this->guard()->logout();
        return response()->json([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }
    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }
    public function refresh()
    {
        /** @var TYPE_NAME $token */
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs'], 200)
                ->header('Authorization', $token);
        }
        return response()->json(['error' => 'refresh_token_error'], 401);
    }

    private function guard()
    {
        return Auth::guard();
    }

}
