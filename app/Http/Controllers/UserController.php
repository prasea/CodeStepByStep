<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getData()
    {
        return Http::get('https://reqres.in/api/users?page=2');
    }
}
