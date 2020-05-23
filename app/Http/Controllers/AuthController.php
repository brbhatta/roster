<?php


namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\User;
use App\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController
{

    public function getLogin()
    {
        return view('auth.login');
    }

    public function me()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (JWTException $exception) {

            return response()->json(['token_absent'], $exception->getStatusCode());

        }

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }

    public function postLogin(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }


    public function postRegister(Request $request, User $user)
    {
        $user->fill($request->only([
            'first_name',
            'last_name',
            'email',
            'username',
            'phone'
        ]));

        $user->username = $request->get('email');
        $user->password = bcrypt($request->get('password'));

        $user->save();
        $user->roles()->sync([$request->get('role_id')]);

        Notification::send($user, new VerifyEmail($user));

        return [
            'data' => [
                'id' => $user->id
            ]
        ];
    }

    public function verifyEmail(Request $request, User $user)
    {

        if($verifiedUser = $user->verifyCode($request->get('code'))) {

            $verifiedUser->email_verified_at = now();
            $verifiedUser->save();

            return view('auth.verify', ['user' => $verifiedUser]);
        }

        return  view('auth.verification-failed');

    }
}
