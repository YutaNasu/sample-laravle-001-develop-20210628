<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\List2;

class ItemController extends Controller
{
    public function index () 
    {
        $userList = [];

        return view('users', compact('userList'));
    }

    public function list()
    {
        $list2 = new List2();
        $user = new User();
        
        $itemList = $list2->all();
        $userList = $user->getAllUsers();

        return view('admin/item/list', compact('itemList', 'userList'));
    }
 
    public function regist_update()
    {
        $item_name = $_POST[ "item_name" ];
        $item_price = $_POST[ "item_price" ];
        $item_date = $_POST[ "date" ];
        $item_image = $_POST[ "image" ];
        $item_information = $_POST[ "item_information" ];

        $new_item = new Product();

        $new_item->newItem([
            "id" => $item_id ,
            "name"  =>  $item_name ,
            "pricae"  => intval( $item_price ) ,
            "date"  => date( "Y-m-d H:i:s" ) ,
            "image"  => "" ,
            "information"  => $item_information ,
        ]);
    }
}