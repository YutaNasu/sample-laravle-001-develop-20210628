<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index () 
    {
        $user = new User();
        $user->username = "ABC"
        $user = new List2();
        $user->insert($user);

        $userList = $user->getAllUsers();

        return view('users', compact('userList'));
    }

}