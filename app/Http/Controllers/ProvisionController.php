<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Provision;

class ProvisionController extends Controller
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
		$provisions = Provision::orderBy('order')->paginate(10);
		return view('provisions.index',[
			'provisions' => $provisions,
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
		return view('provisions.create');
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
			'description' => 'required',
			'order' => 'required|integer',
		]);
		$provision = new Provision;
		$provision->fill($request->all());
		$provision->save();
		return redirect('/admin/provisions')->with('success_message','Provision #<b>'. $provision->name .'</b> was created');
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
		$provision = Provision::where('id',$id)->first();
		return view('provisions.show',[
			'provision' => $provision,
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
		$provision = Provision::where('id',$id)->first();
		return view('provisions.edit',[
			'provision' => $provision,
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
			'description' => 'required',
			'order' => 'required|integer',
		]);
		$provision = Provision::where('id',$id)->first();
		$provision->fill($request->all());
		$provision->save();
		return redirect('/admin/provisions')->with('success_message','Provision #<b>'. $provision->name .'</b> was saved');
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
		$provision = Provision::where('id',$id)->first();
		$name = $provision->name;
		$provision->delete();
		return redirect('/admin/provisions')->with('success_message','Provision #<b>'. $name .'</b> was deleted');
	}
}
