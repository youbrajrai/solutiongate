<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\Categories;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view ('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::get();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'title' => $request->title,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
            'description' => $request->content
        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/products/'),$fileName);
            $data['image'] = $fileName;
            $create = Product::create($data);
            return redirect()->back()->with('message', 'Products added successfully.');
        }         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Product $product)
    {
        $id = $request->id;
        $categories = Categories::get();
        $subcategories = Subcategory::get();
        $product = Product::find($id);
        return view('products.edit',compact('product','categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $id = $request->id;
        $product = Product::find($id);
        $data = array(
            'title' => $request->title,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
            'description' => $request->content
        );
        if($request->hasFile('image')){
            $image_path = public_path('images/products/').$product->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/products/'),$fileName);
            $data['image'] = $fileName;
        }
        $create = Product::where('id',$id)->update($data);
        return redirect()->back()->with('message', 'Product updated successfully.') ;  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Product $product)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        $image_path = public_path('images/products/').$product->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $product->delete();
        return redirect()->back()->with('message', 'Product deleted successfully.');
    }
    public function findSubcategory(Request $request){
        $data  = Subcategory::select('title','id')->where('category_id',$request->id)->get();
        return response()->json($data);
    }
    public function extraDetails(Request $request,Product $product)
    {
        $id = $request->id;
        $productDetails = productDetails::where('products_id',$id)->get();
        // $titles = json_encode($productDetails[0]['title']); //array to json string conversion
        // $details = json_encode($productDetails[0]['details']); //array to json string conversion
        return view('products.extraDetails',compact('id','productDetails'));
    } 
    public function storeExtraDetails(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $details = $request->details;
        $data = array(
            'title' =>$title,
            'details'=>$details
        );
    
        $create = ProductDetails::updateOrCreate(
            ['products_id'=>$id],
            $data
        );
        return redirect()->back()->with('message', 'Product Details saved successfully.');
    }     
}
