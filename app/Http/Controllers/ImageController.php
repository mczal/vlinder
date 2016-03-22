<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Image;
use App\Gallery;

class ImageController extends Controller
{

	public function __construct(){
			$this->middleware('auth');
	}

    //
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		//
		$this->validate($request,[
			'gallery_id' => 'required|integer',
		]);
		return view('images.create',[
			'gallery_id' => $request->gallery_id,
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$this->validate($request,[
			'name' => 'required',
			'order' => 'required|integer',
			'file' => 'required',
			'gallery_id' => 'required',
		]);
		$gallery = Gallery::where('id',$request->gallery_id)->first();
		$image = new Image;
		$image->name = $request->name;
		$image->order = $request->order;
		$image->gallery()->associate($gallery);

		$file = $request->file('file');
		$destination_path = 'gallery/';
		$filename = str_random(6).'_'.$gallery->name.'_'.$file->getClientOriginalName();
		//dd($filename);


		//save image into the database//
		$image->file = asset('/'.$destination_path.$filename);
		$file->move($destination_path,$filename);
		$image->save();
		return redirect('/admin/galleries/'.$gallery->id)->with('success_message','Images #<b>'.$file->getClientOriginalName().'</b> was Saved');
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
