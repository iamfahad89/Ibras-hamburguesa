<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order_item;
use Illuminate\Support\Facades\Auth;
class PlaceOrderController extends Controller
{
    function save( Request $req){
        $menu = new Order_item;
        $menu->item_id = $req->id;
        $menu->price = 1;
        $menu->quantity = 1;
        $menu->user_id = Auth::user()->id ;
        $menu->save();
        echo "Order Placed, please check My Orders page";
        
    }
}
