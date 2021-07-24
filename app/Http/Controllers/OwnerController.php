<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\OwnerController;
use Illuminate\Http\Request;
use App\Models\Room;

class OwnerController extends Controller
{
public function sign()
{
    return view('signup');
}
    public function logins(Request $request) {
       
        $signup= new Room;
        $signup->name=$request->name;
        $signup->email=$request->email;
        $signup->pass=$request->pass;
        $signup->gender=$request->gender;
        $signup->save();
        return view('rooms');
        
    }
}


