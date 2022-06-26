<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$about_us = About::latest()->get();
		return view('about.index', compact('about_us'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('about.create');
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
		self::is_current_project($attributes->id);
		return redirect()->back()->with('message', 'About us added successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function show()
	{
		return view('about.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function edit(About $about)
	{
		return view('about.edit', compact('about'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function update($about)
	{
		$about = About::findOrFail($about);
		$attributes = self::attributes();
		$about->update($attributes);
		self::is_current_project($about->id);
		return redirect()->back()->with('message', 'Record Updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(About $about)
	{
		// $about = About::findOrFail($about->id);
		// $image_path = app_path("abouts/{$about->name}");
		// if (File::exists($image_path)) {
		// 	File::delete($image_path);
		// }
		$about->delete();
		return redirect()->back()->with('message', 'Data Deleted.');
	}

	/**
	 * @param bool $type
	 * @return About
	 */
	public static function attributes($type = false)
	{
		if ($type) {
			$attributes = new About();
		}
		$attributes['title'] = request('title');
		$attributes['content'] = request('content');
		$attributes['is_current'] = request('is_current') ? 1 : 0;
		return $attributes;
	}

	public static function is_current_project($id)
	{
		if (request('is_current')) {
			About::whereNotIn('id', (array)$id)->update(['is_current' => 0]);
		}
	}
}
