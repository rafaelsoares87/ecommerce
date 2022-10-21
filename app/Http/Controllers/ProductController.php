<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            $data = $request->all();
            if($request->image->isValid()){
                $nameFile = Str::of($request->title_product)->slug('-') . '.' .$request->image->getClientOriginalExtension();
                $image = $request->image->storeAs('products', $nameFile);
                $data['image'] = $image;
            }

            Product::create($data);
        

        
    
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$products = Product::find($id)) {
            return redirect()->back();
        }
       
        return view('admin.show_products', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$products = Product::find($id)) {
            return redirect()->back();
        }
        //image Upload
        
        return view('admin.edit_product', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$products = Product::find($id)) {
            return redirect()->back();
        }
        $data = $request->all();
        $products->update($data);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$products = Product::find($id)){
            return redirect()->back();
        }
        $products->delete();
        return redirect()->route('dashboard');
    }

    public function search(Request $request)
    {
        $categories = Category::get();
        $products = Product::where('title_product', 'LIKE', "%{$request->search}%")
                                    ->orWhere('description_product', 'LIKE', "%$request->search%")->paginate();
        return view('home', compact('categories', 'products'));
        
    }
     
}
