<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $attributes = self::attributes($type = 'save');
        $attributes->save();
        return redirect()->back()->with('message', 'Hero added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($project)
    {
        $project = Project::findOrFail($project);
        $attributes = self::attributes();
        $project->update($attributes);
        return redirect()->back()->with('message', 'Record Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project)
    {
        $project = Project::findOrFail($project->id);
        $image_path = app_path("projects/{$project->name}");
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $project->delete();
        return redirect()->back()->with('message', 'Data Deleted.');
    }

    /**
     * @param bool $type
     * @return Project
     */
    public static function attributes($type = false)
    {
            
         if ($type) {
            $attributes = new Project();
        }
        $attributes['organization'] = request('organization');
        $attributes['type'] = request('type');
        $attributes['content'] = request('content');

        if (request()->has('image')) {
            $file = request()->file('image');
            $name = $file->getClientOriginalName();
            $filename = time() . '.' . $name;
            $file->move(public_path() . '/projects/', $filename);
            $attributes['image'] = trim($filename);
        }
        return $attributes;
    }
}
