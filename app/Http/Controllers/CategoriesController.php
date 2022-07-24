<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesStoreRequest;
use File;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::latest()->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesStoreRequest $request)
    {
        $data = array(
            'title'=> $request->title,
        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/categories/'),$fileName);
            $data['image'] = $fileName;
            $create = Categories::create($data);
            return redirect()->back()->with('message', 'Categories added successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        $categories = Categories::latest()->get();
        return view('package', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Categories $categories)
    {
        $id = $request->id;
        $categories = Categories::findOrFail($id);
        return view('categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesStoreRequest $request,Categories $categories)
    {
        $id = $request->id;
        $categories = Categories::find($id);
        $data = array(
            'title'=> $request->title,
        );
        if($request->hasFile('image')){
            $image_path = public_path('images/categories/').$categories->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/categories/'),$fileName);
            $data['image'] = $fileName;
        }
        $create = Categories::where('id',$id)->update($data);
        return redirect()->back()->with('message', 'Categories updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Categories $categories)
    {
        $id = $request->id;
        $categories = Categories::findOrFail($id);
        $image_path = public_path('images/categories/').$categories->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $categories->delete();
        return redirect()->back()->with('message', 'Categories deleted successfully.');
        
    }
}
