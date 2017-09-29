<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

use App\Category;

use App\Post;

class FrontEndController extends Controller
{
    //

    public function index() 

    {
    	
	    return view('index')
	    	->with('title', Setting::first()->site_name)
	    	->with('categories', Category::take(9)->get())
	    	->with('first_post', Post::orderBy('created_at', 'desc')->first())
	    	->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
	    	->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
	    	->with('html', Category::find(3))
	    	->with('php', Category::find(4))
	    	->with('css', Category::find(5))
	    	->with('settings', Setting::first());
    }

    public function singlePost($slug) 

    {

    	$post = Post::where('slug', $slug)->first();

        $previous_post = Post::where('id', '<', $post->id)->max('id');

        $next_post = Post::where('id', '>', $post->id)->min('id');


    	return view('single')
    		->with('post', $post)
    		->with('title', $post->title)
    		->with('categories', Category::take(9)->get())
	    	->with('settings', Setting::first())
            ->with('previous', Post::find($previous_post))
            ->with('next', Post::find($next_post));
    }

}
