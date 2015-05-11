<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Post;

use Auth;

class PostController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('guest');
		// $this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		if ($request->ajax()) {
			return response()->json(array("data" => Post::all()->map(function ($post) {
				return array(
					"id" => $post->id,
					"title" => $post->title,
					"url" => $post->url(),
					"author" => $post->author->name,
					"category" => $post->category->name,
					"date" => $post->posted_at,
				);
			})));
			// return Post::paginate();
		} else {
			return view('admin.posts');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.editPost');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$post = new Post;
		$post->title = $request->input("post-title");
		$post->slug = $post->getSlugFromTitle();
		$post->featured_img = $request->input("post-img");
		$post->category_id = $request->input("post-category");
		$post->content = $request->input("post-content");
		$post->user_id = Auth::user()->id;

		$post->save();

		if ($request->ajax()) {
			return response()->json(['code' => 0, 'message' => 'success']);
		} else {
			return redirect('admin/post/' . $post->id . "/edit");
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($category, $post)
	{
		$post = Post::where('slug', '=', $post)->take(1)->get();
		if (count($post) == 0 || $post[0]->category->slug != $category) {
			abort(404);
		}
		return view('post', ['post' => $post[0]]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$post = Post::find($id);
		if (!isset($post)) {
			abort(404);
		}
		return view('admin.editPost', ['post' => $post]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//
		$post = Post::find($id);
		$post->title = $request->input("post-title");
		$post->slug = $post->getSlugFromTitle();
		$post->featured_img = $request->input("post-img");
		$post->category_id = $request->input("post-category");
		$post->content = $request->input("post-content");
		$post->user_id = Auth::user()->id;

		$post->save();

		if ($request->ajax()) {
			return response()->json(['code' => 0, 'message' => 'success']);
		} else {
			return redirect('admin/post/' . $id . "/edit");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
