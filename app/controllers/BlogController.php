<?php

class BlogController extends BaseController {
	/**
	 *	Insert a new blog post to the database
	 */
	public function processNew(){
		// get vars
		$name = Input::get('name');
		$content = Input::get('content');

		$blog = new Blog;
		$blog->name = $name;
		$blog->content = $content;
		$blog->save();

		// show blog list
		$blogs = Blog::all();
		return View::make('blog-listing')->with('blogs', $blogs);
	}

	public function blogJson(){
		return '[
					{"name" : "aahello world",
					"content" : "this is a hello world statement"},
					{"name" : "laaorem ipsum",
					"content" : "lorem ipsum dolor sit imit"}
				]';
	}

}

?>