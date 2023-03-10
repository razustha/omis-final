<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Log\LoginLog;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();
        $loginDetails = [
            'user_id' => auth()->user()->id,
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'login_at' => now(),
        ];
        LoginLog::create($loginDetails);

        // return redirect()->intended(RouteServiceProvider::HOME);
        if (auth()->user()->user_type == 'EMPLOYEE') {
            return redirect(RouteServiceProvider::USER);
        } elseif(auth()->user()->user_type == 'COMPANY') {
            return redirect(RouteServiceProvider::ORGANIZATION);
        } else {
            return redirect(RouteServiceProvider::HOME); //->intended(RouteServiceProvider::HOME);

        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        dd('logout');
        $loginDetails = [
            'user_id' => auth()->user()->id,
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'type' => 'Logout',
            'logout_at' => now(),
        ];
        LoginLog::create($loginDetails);
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
