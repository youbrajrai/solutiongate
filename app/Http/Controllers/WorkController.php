<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$works = Work::latest()->get();
		return view('work.index', compact('works'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('work.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
		$attributes = self::attributes($type = 'save');
		$attributes->save();
		return redirect()->back()->with('message', 'Work added successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Work  $work
	 * @return \Illuminate\Http\Response
	 */
	public function show(Work $work)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Work  $work
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Work $work)
	{
		return view('work.edit', compact('work'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Work  $work
	 * @return \Illuminate\Http\Response
	 */
	public function update($work)
	{
		$work = Work::findOrFail($work);
		$attributes = self::attributes();
		$work->update($attributes);
		return redirect()->back()->with('message', 'Record Updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Work  $work
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Work $work)
	{
		$work->delete();
		return redirect()->back()->with('message', 'Data Deleted.');
	}

	/**
	 * @param bool $type
	 * @return Work
	 */
	public static function attributes($type = false)
	{
		if ($type) {
			$attributes = new Work();
		}
		$attributes['title'] = request('title');
		$attributes['content'] = request('content');
		return $attributes;
	}
}
