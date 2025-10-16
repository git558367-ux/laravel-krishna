<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{


    public function about(){
        $userid=[1,2,3,4];
        return view('about',compact('userid'));
        
    }

   public function contact(){
    return view ('contact');
   }

   public function createPost(){
    return view('create-post');
   }


   public function create(Request $request){
        $request->validate([
        'title'=>'required',
        'description'=>'required',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif'

        ]);
        
        $imageName = time().'.'. $request->image->extension();
        $request->image->move(public_path('upload/post'),$imageName);

        Post::create([
            'title' => $request->title,
            'description'=>$request ->description,
            'image'=>$imageName,
            
        ]);
    
    return redirect('/blogs');
   }

public function sign(){
    return view('signin');
}

public function blogs(){
    $posts=Post::all();

    return view('blogs',compact('posts'));
}

public function admin(){
   return view('admin.index');
}

public function profile(){
    return view('admin.profile');
}

public function deletePost($id){
    $product=Post::findOrFail($id);
    $product->delete();

    return redirect()->route('blogs');
}
}
