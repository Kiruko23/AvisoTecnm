<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class PassportAuthController extends Controller
{
    /**
     * Registration
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:4',
            'carrera' => 'required|min:4',
            'semestre' => 'required',
            'situacion' => 'required|min:4',
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'balance' => 'required',

        ]);

        $user = User::create([
            'username' => $request->username,
            'carrera' => $request->carrera,
            'semestre' => $request->semestre,
            'situacion' => $request->situacion,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'balance' => $request->balance,
        ]);

        $token = $user->createToken('LaravelAuthApp')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
