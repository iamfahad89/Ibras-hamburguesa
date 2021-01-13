<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $menu_items = DB::table('order_items')
                        ->select(DB::raw(' (select sum(price) from order_items where  DATE(created_at)= 
                        CURDATE()-1) sale_today , 
                                       (select sum(quantity) from order_items where  DATE(created_at)= 
                        CURDATE()-1) order_today  ,
                                       sum(price) total_sum, 
                                       sum(quantity) total_quantity,
                                       (select count(*) from users ) - 1 as  total_users '))
                        ->get();   
        
        return view('admin',[
            'menu_items' => $menu_items 
        ], [
            'pageclass' => 'admin'
        ]);
    }
}
