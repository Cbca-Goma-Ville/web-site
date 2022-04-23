<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Login\RememberMeExpiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    use RememberMeExpiration;

    public function show()
    {
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('UserName', 'Password');

        $response = httpPost('/Account/GetToken', $credentials);

        // 404 Means user not found
        if ($response['status_code'] == 404) {
            return back()->with('error', $response['message'])
                ->withInput();
        }

        $user = $response['response_data']['account'];

        $user['id'] = $user['user_id'];
        $user['password'] = Str::random(10);
        $user['username'] = $credentials['UserName'];
        $user['remember_token'] = Str::random(20);

        Session::put('user', $user);

        $credentials = [
            'username' => $credentials['UserName'],
            'password' => $user['password'],
        ];

        if (Auth::attempt($credentials, true)) {
            $this->setRememberMeExpiration(Auth::user());

            return redirect()->route('agent.dashboard');
        }
    }
}
