<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostsController extends Controller {

	public function index(){
		$posts = \App\Post::all();
		
		return view('posts.index',compact('posts'));
	}

}
