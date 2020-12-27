<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function avatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $request->avatar->store('images');
        }
        return redirect(route('dashboard'));
    }
}
