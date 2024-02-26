<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Auth; //get current user

class AccountController extends Controller
{
    public function post_page()
    {
        return view('acc.post_page');
    }

    public function add_post(Request $request)
    {
        $user=Auth()->user();
        $user_id=$user->id;

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $user_id;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post_images', $imagename);
        // store in database table
        $post->image = $imagename;

        $post->save();
        return redirect()->back()->with('message', 'Post Added Successfully.');

    }

    public function view_posts()
    {
        $user = auth()->user();
        $posts = $user->posts;

        return view('acc.view_posts', compact('posts'));
    }

    /*public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message', 'Post Deleted Successfully.');
    }*/

    public function delete_post($Id)
    {
        // Find the post by ID
        $post = Post::find($Id);

        // Check if the post exists
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found');
        }

        // Check if the authenticated user is the owner of the post
        if ($post->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Unauthorized to delete this post');
        }

        // Perform the deletion
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully');
    }

    public function edit_post($Id)
    {
        // Find the post by ID
        $post = Post::find($Id);

        return view('acc.edit_post', compact('post'));
    }

    public function update_post(Request $request, $Id)
    {
        // Find the post by ID
        $post = Post::find($Id);


        // Update the post
        $post->title = $request->title;
        $post->content = $request->content;
        $image = $request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('post_images', $imagename);
            // store in database table
            $post->image = $imagename;
        }
        $post->save();

        return redirect()->back()->with('message', 'Post Updated Successfully.');
    }

}


