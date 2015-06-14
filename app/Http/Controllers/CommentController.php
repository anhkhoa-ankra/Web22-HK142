<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Comment;

use Auth;

class CommentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		// client ajax
		if($request->ajax() && $request->has('post')){
			$comments = Comment::where('post_id', $request->input('post'))->get();

			$result = [];
			foreach ($comments as $comment) {

				$childs = [];
				foreach (Comment::where('parent_id', $comment->id)->get() as $cmdChilds) {
					array_push($childs, array(
						"id" => $cmdChilds->id,
						"name" => $cmdChilds->name,
						"website" => $cmdChilds->website,
						"content" => $cmdChilds->content,
						"approved" => $cmdChilds->approved,
						"created_at" => $cmdChilds->created_at,
					));
				}

				array_push($result, array(
					"id" => $comment->id,
					"name" => $comment->name,
					"website" => $comment->website,
					"content" => $comment->content,
					"approved" => $comment->approved,
					"created_at" => $comment->created_at,
					"childs" => $childs,
				));
			}
			return response()->json($result);
		}

		// admin section
		// check authenticated
		if (!$request->user()) {
			return;
		}

		if ($request->ajax()) {
			return response()->json(array("data" => Comment::all()->map(function ($comment) {
				return array(
					"id" => $comment->id,
					"name" => $comment->name,
					"post" => $comment->post->title,
					"email" => $comment->email,
					"website" => $comment->website,
					"content" => $comment->content,
					"approved" => $comment->approved,
					"date" => $comment->created_at,
				);
			})));
		} else {
			return view('admin.comment');
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
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		if ($request->has('post')) {
			$comment = new Comment;

			if ($request->has('cmt-parent')) {
				$comment->parent_id = $request->input('cmt-parent');
			}

			$comment->post_id = $request->input('post');
			$comment->name = $request->input('cmt-name');
			$comment->email = $request->input('cmt-email');
			$comment->website = $request->input('cmt-website');
			$comment->content = $request->input('cmt-content');
			$comment->approved = false;

			$comment->save();

			return response()->json(['code' => 0, 'message' => 'success', 'id' => $comment->id]);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

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
		$comment = Comment::find($id);
		if (!isset($post)) {
			abort(404);
		}
		return view('admin.editComment', ['comment' => $comment]);

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
		$comment = Comment::find($id);
		$comment->approved = 1;

		$comment->save();

		if ($request->ajax()) {
			return response()->json(['code' => 0, 'message' => 'success']);
		} else {
			return redirect('admin/comment/' . $id);
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
		Comment::destroy($id);
	}

}
