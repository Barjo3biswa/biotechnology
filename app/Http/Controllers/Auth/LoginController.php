<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // dd("ok");
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }


    // public function login(Request $request)
    // {

    //     $app_type = Crypt::decrypt($request->id);
    //     // dd($app_type);
    //     $this->validateLogin($request);
    //     if (method_exists($this, 'hasTooManyLoginAttempts') &&
    //         $this->hasTooManyLoginAttempts($request)) {
    //         $this->fireLockoutEvent($request);

    //         return $this->sendLockoutResponse($request);
    //     }

    //     if ($this->attemptLogin($request)) {
    //         if ($request->hasSession()) {
    //             $request->session()->put('auth.password_confirmed_at', time());
    //         }
    //         // dd(Auth::user()->id);
    //         // User::where('id',Auth::user()->id)->update(['apply_for'=>$app_type]);
    //         return $this->sendLoginResponse($request);
    //     }
    //     $this->incrementLoginAttempts($request);

    //     return $this->sendFailedLoginResponse($request);
    // }

    public function showAdminLoginForm()
    {
        // dd("ok");
        return view('auth.admin-login', ['url' => route('admin.login-view'), 'title'=>'Admin']);
    }

    public function adminLogin(Request $request)
    {
        // dd("ok");
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt( $request->only($this->username(), 'password'), false) ){
            // dd("ok");
            // return redirect()->intended('/dashboard');
            return redirect()->route('dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
}
