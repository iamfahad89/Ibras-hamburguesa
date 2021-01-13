<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $menu_items = DB::table('menu_items')->get();
        
        return view('menu',[
            'menu_items' => $menu_items 
        ], [
            'pageclass' => 'menu'
        ]);
    }
}
