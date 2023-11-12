<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();

        return redirect('/'); // You can redirect to any route after logout
    }
}
