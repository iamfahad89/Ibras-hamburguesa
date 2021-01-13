<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class MyOrdersController extends Controller
{
    public function index()
    {
        $menu_items = DB::table('order_items')
                        ->select(DB::raw('(select item_name from menu_items where menu_items.id = order_items.item_id) as item_name,created_at, quantity as total_quantity, (select price from menu_items where menu_items.id = order_items.item_id) as item_price'))
                        ->where('user_id' , Auth::user()->id)
                        ->get();   
        
        
        return view('myorders',[
            'menu_items' => $menu_items 
        ], [
            'pageclass' => 'myorders'
        ]);
    }
}
