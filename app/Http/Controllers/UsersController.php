<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersController extends Controller
{
    public function usingDB()
    {
        return DB::select("select * from users");
    }
    public function usingModel()
    {
        return User::all();
    }
}
