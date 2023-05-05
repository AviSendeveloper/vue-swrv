<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $users = User::take(10)->get();

        return response()->json($users);
    }
}
