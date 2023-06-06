<?php

namespace SJoussin\Http\Controllers;

use SJoussin\Http\Resources\UserResource;
use SJoussin\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use SJoussin\ValidationRules\UserValidationRules;


class AuthController extends Controller
{

    protected const TOKEN_REGISTER = "REGISTER";
    protected const TOKEN_LOGIN = "LOGIN";
    protected const TOKEN_LOGIN_BY_PHONE = "LOGIN_BY_PHONE";
    protected const TOKEN_GET_TOKEN = "TOKEN";

    protected const ROLES = ['CUSTOMER', 'DELIVERY', 'ADMIN'];

    // AUTH

    public function loggedUser(Request $request)
    {
        $user = $request->user();
        $user = $user->loadMissing(['location', "command"]);
        return $user;
    }

    /**
     * Create User
     * @param Request $request
     * @return User
     */
    public function createUser(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(), UserValidationRules::RULES_REGISTER);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken(self::TOKEN_REGISTER)->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), UserValidationRules::RULES_LOGIN);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken(self::TOKEN_LOGIN)->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

public function loginUserByPhone(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), UserValidationRules::RULES_LOGIN_PHONE);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

//            if(!Auth::attempt($request->only(['phone', 'password']))){
//                return response()->json([
//                    'status' => false,
//                    'message' => 'phone & Password does not match with our record.',
//                ], 401);
//            }

            $user = User::where('phone', $request->phone)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken(self::TOKEN_LOGIN_BY_PHONE)->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function tokenUser(Request $request)
    {
        $request->validate(UserValidationRules::RULES_TOKEN);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken(self::TOKEN_GET_TOKEN . "_" . $request->device_name)->plainTextToken;
    }



    // USER MODEL

    public function getAll(Request $request)
    {
        return UserResource::collection(User::all());
    }

    public function get(Request $request, User $user)
    {
        $user = $user->loadMissing(['location', 'command']);
        return new UserResource($user);
    }

    public function update(Request $request, User $user)
    {
        $request->validate(UserValidationRules::RULES_UPDATE);

        $user->update($request->only(
            [
                'name',
                'email',
                'phone',
            ]
        ));

        return new UserResource($user);
    }


    public function destroy(Request $request, User $user)
    {
        try{
            $user->delete();

            return response()->json(null, 204);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
