<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ServiceStoreRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServiceStoreRequest $request)
    {
        $attributes = self::attributes($type = 'save');
        $attributes->save();
        return redirect()->back()->with('message', 'Hero added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($service)
    {
        $service = Service::findOrFail($service);
        $attributes = self::attributes();
        $service->update($attributes);
        return redirect()->back()->with('message', 'Record Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Service $service)
    {
        $service = Service::findOrFail($service->id);
        $image_path = app_path("heros/{$service->name}");
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $service->delete();
        return redirect()->back()->with('message', 'Data Deleted.');
    }


    /**
     * @param bool $type
     * @return Service
     */
    public static function attributes($type = false)
    {
        if ($type) {
            $attributes = new Service();
        }
        $attributes['title'] = request('title');
        $attributes['content'] = request('content');
        if (request()->has('image')) {
            $file = request()->file('image');
            $name = $file->getClientOriginalName();
            $filename = time() . '.' . $name;
            $file->move(public_path() . '/services/', $filename);
            $attributes['image'] = trim($filename);
        }
        return $attributes;
    }
}
