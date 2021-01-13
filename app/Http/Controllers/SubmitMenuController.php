<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu_item;

class SubmitMenuController extends Controller
{
    //
    function save( Request $req){
        $menu = new Menu_item;
        $menu->item_name = $req->item_name;
        $menu->price = $req->price;
        $menu->ingredients = $req->ingredients;
        $menu->size = $req->size;
        $menu->image_loc = $req->image;
        $menu->type = $req->type;
        $menu->special_tag = $req->stag;
        echo $menu->save();
    }
        
}
