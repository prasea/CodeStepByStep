<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $req)
    {
        $req->validate([
            'username' => 'required | max : 10',
            'password' => 'required | min : 8',
        ]);
        return $req;
    }
}
