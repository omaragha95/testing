<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

class HomePageController extends Controller
{

	public function index() {

		$posts = Post::select('id', 'title', 'price')
					->latest()
					->paginate(9);


		return view('front.index', compact('posts'));

	}

	public function postsByCategory($id) {

		$posts = Post::where('category_id', $id)->get();
		return view('front.byCategory', compact('posts'));

	}


	public function show($id) {

		$post = Post::findOrFail($id);
		return view('front.details', compact('post'));
	}




}
