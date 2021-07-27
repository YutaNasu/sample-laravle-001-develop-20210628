<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ItemController extends Controller
{
    public function index () 
    {
        $userList = [];

        return view('users', compact('userList'));
    }

    public function list()
    {
        $itemList = [];
        return view('admin/item/list', compact('itemList'));
    }
}