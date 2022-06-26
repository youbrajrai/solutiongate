<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$missions = Mission::latest()->get();
		return view('mission.index', compact('missions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('mission.create');
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
		return redirect()->back()->with('message', 'Record added successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Mission  $mission
	 * @return \Illuminate\Http\Response
	 */
	public function show(Mission $mission)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Mission  $mission
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Mission $mission)
	{
		return view('mission.edit', compact('mission'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Mission  $mission
	 * @return \Illuminate\Http\Response
	 */
	public function update($mission)
	{
		$mission = Mission::findOrFail($mission);
		$attributes = self::attributes();
		$mission->update($attributes);
		return redirect()->back()->with('message', 'Record Updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Mission  $mission
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Mission $mission)
	{
		$mission->delete();
		return redirect()->back()->with('message', 'Data Deleted.');
	}

	/**
	 * @param bool $type
	 * @return Mission
	 */
	public static function attributes($type = false)
	{
		if ($type) {
			$attributes = new Mission();
		}
		$attributes['type'] = request('type');
		$attributes['content'] = request('content');
		return $attributes;
	}
}
