<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gallery;

class GalleryController extends Controller
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
		$galleries = Gallery::paginate(10);
		return view('galleries.index',[
			'galleries' => $galleries,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('galleries.create');
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
		]);
		$gallery = new Gallery;
		$gallery->fill($request->all());
		$gallery->save();
		return redirect('/admin/galleries')->with('success_message','Gallery #<b>'. $gallery->name .'</b> was created');
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
		$gallery = Gallery::where('id',$id)->first();
		return view('galleries.show',[
			'gallery' => $gallery,
		]);
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
		$gallery = Gallery::where('id',$id)->first();
		return view('galleries.edit',[
			'gallery' => $gallery,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		//
		$this->validate($request,[
			'name' => 'required',
			'order' => 'required|integer',
		]);
		$gallery = Gallery::where('id',$id)->first();
		$gallery->fill($request->all());
		$gallery->save();
		return redirect('/admin/galleries')->with('success_message','Gallery #<b>'. $gallery->name .'</b> was saved');
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
		$gallery = Gallery::where('id',$id)->first();
		$name = $gallery->name;
		$gallery->delete();
		return redirect('/admin/galleries')->with('success_message','Gallery #<b>'. $name .'</b> was deleted');
	}
}
