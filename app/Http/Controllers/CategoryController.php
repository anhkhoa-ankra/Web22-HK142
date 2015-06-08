<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Category;
use App\Post;

class CategoryController extends Controller {

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
			return response()->json(array("data" => Category::all()->map(function ($category) {
				return array(
					"id" => $category->id,
					"name" => $category->name,
					"url" => $category->url(),
					"parent" => $category->parent ? $category->parent->name : "None",
					"parent_id" => $category->parent_id,
				);
			})));
		} else {
			return view('admin.categories');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($category)
	{
		// Uncategorized post will be on root
		$post = Post::where('slug', '=', $category)->take(1)->get();
		if (count($post) > 0 && $post[0]->category_id == 1)
			return view('post', ['post' => $post[0]]);

		// where else
		$cat = Category::where('slug', '=', $category)->take(1)->get();
		if (count($cat) == 0)
			abort(404);

		$cat = $cat[0];
		if ($cat->id != 1)
			return view('category', ['cat' => $cat]);
		else
			abort(404);
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
		$cat = Category::find($id);
		$cat->name = $request->input("name");
		$cat->slug = $cat->getSlugFromName();
		$cat->parent_id = $request->input("parent");

		$cat->save();

		return response()->json(['code' => 0, 'message' => 'success']);
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
