<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    protected $redirectAfterLogout = '/login';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function logout(Request $request)
{
    Auth::logout(); // Logout user
        $request->session()->invalidate(); // Hapus sesi yang ada
        $request->session()->regenerateToken(); // Regenerasi CSRF token untuk keamanan

        return redirect('/login'); // Arahkan ke halaman login
}


    public function username()
{
    $login = request()->input('login');
    $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    request()->merge([$field => $login]);
    return $field;
}
}


