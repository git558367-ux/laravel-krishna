<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{


    public function about(){
        $userid=[1,2,3,4];
        return view('about',compact('userid'));
        
    }

   public function contact(){
    return view ('contact');
   }


   public function create(Request $request){
    $validate= $request->validate([
        'email'=>'required|unique|email',
        'password'=>'required']);
    
    return redirect('/');
   }

public function sign(){
    return view('signin');
}
}
