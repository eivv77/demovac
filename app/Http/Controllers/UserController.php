<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use function auth;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
//    public function __construct(){
//        $this->middleware('auth:api', ['except' => ['login'] ]);
//    }


    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $input = $request->only('email', 'password');

        if (!$token = auth()->attempt($input)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }


        return $this->respondWithToken($token);

    }

    /**
     * @return JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * @return JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken( auth()->refresh() );
    }

    /**
     * @return JsonResponse
     */
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Logged Out']);
    }

}

