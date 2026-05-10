<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);
        if (! Auth::attempt($credentials)) {
            return back()
                ->withErrors([
                    'login' => trans('auth.failed')
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();
        return redirect()->route('welcome');
    }

    public function view(Request $request): View
    {
        return view('login');
    }
}
