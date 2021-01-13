<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CreateMenuController extends Controller
{
    public function index()
    {
        return view('createmenu', [
            'pageclass' => 'adminmenu'
        ]);
    }
}
