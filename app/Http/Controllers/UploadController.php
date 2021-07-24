<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function uploads(Request $request){
        
        return view('upload');
        if ($request->file('imgUpload1') == null) {
            $file = "";
        }else{
           $file = $request->file('imgUpload1')->store('images');  
        }
        }
  }
    
