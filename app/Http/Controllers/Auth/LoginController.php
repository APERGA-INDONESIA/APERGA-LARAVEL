<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // Generate CSRF token for the authenticated user
        $csrfToken = $this->generateCSRFToken();

        // Store the CSRF token in the session
        Session::put('csrfToken', $csrfToken);

        // Pass the CSRF token to the authenticated user's view
        $user->csrfToken = $csrfToken;
    }

    private function generateCSRFToken()
    {
        // Logic to generate CSRF token
        $csrfToken = Str::random(40);

        return $csrfToken;
    }
}
