<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;

class ClientController extends Controller
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
		$clients = Client::orderBy('order')->paginate(10);
		return view('clients.index',[
			'clients' => $clients,
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
		return view('clients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$this->validate($request, [
				'name' => 'required',
				'order' => 'required|integer',
		]);

		$client = new Client;
		$client->fill($request->all());
		//dd($client);
		$client->save();
		return redirect('/admin/clients')->with('success_message', 'Client #<b>' . $client->name . '</b> was created.');
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
		$client = Client::where('id',$id)->first();
		return view('clients.show',[
			'client' => $client,
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
		$client = Client::where('id',$id)->first();
		return view('clients.edit',[
			'client' => $client,
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
		$client = Client::where('id',$id)->first();
		$client->fill($request->all());
		$client->save();
		return redirect('/admin/clients/')->with('success_message', 'Client #<b>' . $client->name . '</b> was updated.');
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
		$client = Client::where('id',$id)->first();
		$name = $client->name;
		$client->delete();
		return redirect('/admin/clients/')->with('success_message','Client #<b>'. $client->name . '</b> was deleted');
	}
}
