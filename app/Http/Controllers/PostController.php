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



public function deletePost($id){
    $product=Post::findOrFail($id);
    $product->delete();

    return redirect()->route('blogs');
}


public function editPost($id)
{
    $post = Post::findOrFail($id);
    return view('edit-post', compact('post'));
}

public function updatePost(Request $request, $id)
{
    $post = Post::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif'
    ]);

    // If new image uploaded
    if ($request->hasFile('image')) {
        // Delete old image if it exists
        if ($post->image && file_exists(public_path('upload/post/' . $post->image))) {
            unlink(public_path('upload/post/' . $post->image));
        }

        // Upload new image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload/post'), $imageName);
        $post->image = $imageName;
    }

    $post->title = $request->title;
    $post->description = $request->description;
    $post->save();

    return redirect('/blogs')->with('success', 'Post updated successfully!');
}






}
