<?php namespace App\Http\Controllers;
new \WP_Query;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = new \WP_Query(array(
			'post_type' => 'post',
		));

		$posts = $query->get_posts();

		return view('main.home', compact('posts'));
	}

	public function about()
	{
		$query = new \WP_Query(array(
			'post_type' => 'page',
		));

		$about = $query->get_posts();

		return view('main.about', compact('about'));
	}

	public function contact()
	{
		return view('main.contact');
	}

	public function gallery()
	{
		return view('main.gallery');
	}

	public function posts()
	{
		$query = new \WP_Query(array(
			'post_type' => 'post',
		));

		$posts = $query->get_posts();

		return view('main.posts', compact('posts'));
	}
}
