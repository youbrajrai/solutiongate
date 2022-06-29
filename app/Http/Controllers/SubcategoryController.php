<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Categories;
use Illuminate\Http\Request;
use File;
use App\Http\Requests\SubcategoriesStoreRequest;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::latest()->get();
        return view('subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::get();
        return view('subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoriesStoreRequest $request)
    {
        $data = array(
            'title' => $request->title,
            'category_id' => $request->category_id
        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/subcategories/'),$fileName);
            $data['image'] = $fileName;
            $create = Subcategory::create($data);
            return redirect()->back()->with('message', 'SubCategories added successfully.');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Subcategory $subcategory)
    {
        $id = $request->id;
        $subcategories = Subcategory::where('category_id',$id)->get();
        return view('subcategories',compact('subcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Subcategory $subcategory)
    {
        $id = $request->id;
        $categories = Categories::get();
        $subcategories = Subcategory::find($id);
        return view('subcategories.edit',compact('subcategories','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoriesStoreRequest $request, Subcategory $subcategory)
    {
        $id = $request->id;
        $subcategories = Subcategory::find($id);
        $data = array(
            'title'=> $request->title,
        );
        if($request->hasFile('image')){
            $image_path = public_path('images/subcategories/').$subcategories->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/subcategories/'),$fileName);
            $data['image'] = $fileName;
        }
        $create = Subcategory::where('id',$id)->update($data);
        return redirect()->back()->with('message', 'Sub Categories updated successfully.') ;       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Subcategory $subcategory)
    {
        $id = $request->id;
        $subcategories = Subcategory::findOrFail($id);
        $image_path = public_path('images/subcategories/').$subcategories->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $subcategories->delete();
        return redirect()->back()->with('message', 'SubCategories deleted successfully.');
    }
}
