<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homepage()
    {
        // Check if a user is authenticated
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // Get posts from other users (excluding the authenticated user)
            $posts = Post::where('user_id', '!=', $user->id)->get();
        } else {
            // If no user is authenticated, get all posts
            $posts = Post::all();
        }

        return view('home.homepage', compact('posts'));
    }
}

