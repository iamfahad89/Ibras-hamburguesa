<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Contact_feedback;

class SubmitContactController extends Controller
{

    function save( Request $req){
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|min:6',
        ]);
        $menu = new Contact_feedback;
        $menu->name = $req->name;
        $menu->email = $req->email;
        $menu->subject = $req->subject;
        $menu->message = $req->message;
        echo $menu->save();
    }
}
