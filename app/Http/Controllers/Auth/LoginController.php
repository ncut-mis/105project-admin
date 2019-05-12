<?php

namespace App\Http\Controllers\Auth;

//use App\Admin;
//use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*登入頁面*/
//    public function showLoginForm()
//    {
//        return view('admin.dashboard.index');
//    }

    /*定義登入時須輸入的table對應欄位，這邊我們在table內輸入的是account*/
//    public function username()
//    {
//        return 'email';
//    }

    /*選擇要使用的guard*/
//    protected function guard()
//    {
//        return Auth::guard('admin');
//    }

    /*登出功能*/
//    public function logout(Request $request)
//    {
//        $this->guard()->logout();
//        $request->session()->invalidate();
//        return redirect(route('vendor::loginForm'));
//    }
}
