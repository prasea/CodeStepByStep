<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show()
    {
        return view('users.show', [
            'name' => 'Anil',
            'users' => ['Anil', 'Sunil', 'Manil']
        ]);
    }
}
