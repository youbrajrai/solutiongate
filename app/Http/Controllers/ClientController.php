<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('client.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('client.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$attributes = self::attributes($type = 'save');
		$attributes->save();
		return redirect()->back()->with('message', 'Client added successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Client  $client
	 * @return \Illuminate\Http\Response
	 */
	public function show(Client $client)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Client  $client
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Client $client)
	{
		return view('client.edit', compact('client'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Client  $client
	 * @return \Illuminate\Http\Response
	 */
	public function update($client)
	{
		$client = Client::findOrFail($client);
		$attributes = self::attributes();
		$client->update($attributes);
		return redirect()->back()->with('message', 'Record Updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Client  $client
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Client $client)
	{
		$client->delete();
		return redirect()->back()->with('message', 'Data Deleted.');
	}

	/**
	 * @param bool $type
	 * @return Client
	 */
	public static function attributes($type = false)
	{
		if ($type) {
			$attributes = new Client();
		}
		$attributes['name'] = request('name');
		$attributes['description'] = request('description');
		if (request()->has('image')) {
			$file = request()->file('image');
			$name = $file->getClientOriginalName();
			$filename = time() . '.' . $name;
			$file->move(public_path() . '/clients/', $filename);
			$attributes['image'] = trim($filename);
		}
		return $attributes;
	}
}
