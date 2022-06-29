<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\HeroStoreRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $heros = Hero::latest()->get();
        return view('hero.index', compact('heros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('hero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HeroStoreRequest $request)
    {
        $attributes = self::attributes($type = 'save');
        $attributes->save();
        return redirect()->back()->with('message', 'Hero added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Hero $hero
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('hero.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Hero $hero
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Hero $hero
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($hero)
    {
        $hero = Hero::findOrFail($hero);
        $attributes = self::attributes();
        $hero->update($attributes);
        return redirect()->back()->with('message', 'Record Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Hero $hero
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Hero $hero)
    {
        $hero = Hero::findOrFail($hero->id);
        $image_path = app_path("heros/{$hero->name}");
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $hero->delete();
        return redirect()->back()->with('message', 'Data Deleted.');
    }


    /**
     * @param bool $type
     * @return Hero
     */
    public static function attributes($type = false)
    {
        if ($type) {
            $attributes = new Hero();
        }
        $attributes['title'] = request('title');
        $attributes['content'] = request('content');
        if (request()->has('hero')) {
            $file = request()->file('hero');
            $name = $file->getClientOriginalName();
            $filename = time() . '.' . $name;
            $file->move(public_path() . '/heros/', $filename);
            $attributes['hero'] = trim($filename);
        }
        return $attributes;
    }
}
