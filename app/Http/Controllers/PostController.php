<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Country;
use App\Image;

class PostController extends Controller
{


	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {

		$posts = auth()->user()->posts;
		return view('front.myPosts', compact('posts'));

	}

	public function create() {
		

		$categories = Category::all();
		$countries = Country::all();

		return view('front.addPost', compact('categories', 'countries'));

	}


	public function store(Request $request)
	{
		$post = Post::create($request->all() + ['user_id' => auth()->user()->id]);

		foreach ($request->images as $image) {

			$filename = $image->store('public/img');
			$image = new Image;
			$image->image = basename($filename);
			$post->images()->save($image);
		}

		return back()->with('success', 'done');
	}



}
