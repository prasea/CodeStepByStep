<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function session(Request $req)
    {
        $data = $req->input();
        $req->session()->put('username', $data['username']);
        return redirect('/profile');
    }
}
