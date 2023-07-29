<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
/*
$validated = $request->validate([
            
            'user_id' => '',
]); Post::create($validated);
*/

class PostsController extends Controller
{
    //
	protected function index (){
		$posts = Post::all();
		
		return view('home',compact('posts'));
	}
	
	protected function create(Request $request){
		
		$create = $request->validate([
			'title' => '',
			'imge_name' => '',
			'description' => ''
		]);
		Post::create($create);
		
		$posts = Post::all();
		
		return view('home',compact('posts'));
		
	}
	
	public function edit( $id){
	    $post = Post::find($id);
	    return view("edit",compact('post'));
	}
	public function update(Request $request, $id)
    {
        
        $post = Post::find($id);
       $post->update($request->all());
       
        //   $post->save();

        
		$posts = Post::all();

    	return view('home',compact('posts'));

    }
    public function destroy($id)
    {
        Post::destroy($id); 
        $posts = Post::all();

    	return view('home',compact('posts'));
    }


}
