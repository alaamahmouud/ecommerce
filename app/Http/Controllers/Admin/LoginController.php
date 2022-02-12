<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    
    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
        // to admin dashboard
        if($user->isAdmin()) {
            return redirect(route('admin_dashboard'));
        }

        // to user dashboard
        else if($user->isUser()) {
            return redirect(route('user_dashboard'));
        }

        abort(404);
    }
}
