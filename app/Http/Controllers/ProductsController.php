<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Tag;

use Illuminate\Support\Facades\File;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products') 
        ->with( "products",Product::all())
        ->with( "categories",Category::all())
        ->with( "tags",Tag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request ,[
            "name" => "required" ,
            "status" => "required" ,
            "content" => "required" ,
            "price" => "required" ,
            "priceType" => "required" ,
            "tags" => "required" ,
            "picture" => "required | image" , 
        ]);
        $picture = $request->picture;
        $picture_new_name = time().$picture->getClientOriginalName();
        $picture->move('uploads/products',$picture_new_name);


        $product = new Product;
        $product->picture = 'uploads/products/'.$picture_new_name;
        $product->name =  $request->name;
        $product->status =  $request->status;
        $product->content =  $request->content;
        $product->price =  $request->price;
        $product->priceType =  $request->priceType;
        $product->category_id = $request->category_id;
        $product->save();
        $product->tags()->attach($request->tags);
        return redirect()->back()->with('done' ,'The product has been added successfully')
        ->with( "categories",Category::all())
        ->with( "tags",Tag::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('editProduct')->with('product' , $product);
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
        $product = Product::find($id);
        $this -> validate($request ,[
            "name" => "required" ,
            "status" => "required" ,
            "content" => "required" ,
            "price" => "required" ,
            "priceType" => "required" ,
        ]);
        if($request->hasFile('picture') ){
            $picture = $request->picture;
            $picture_new_name = time().$picture->getClientOriginalName();
            $picture->move('uploads/products',$picture_new_name);
            $product->picture = 'uploads/products/'.$picture_new_name;
        }
       


        
        $product->name =  $request->name;
        $product->status =  $request->status;
        $product->content =  $request->content;
        $product->price =  $request->price;
        $product->priceType =  $request->priceType;
        $product->save();
    
        return redirect()->route('products')->with('done' ,'The product '.$request->name.' has been updated successfully')
        ->with( "categories",Category::all())
        ->with( "tags",Tag::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
       
        $image_path =  $product->picture;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $deletedProductName = $product->name ; 
        $product->delete($id);
        return redirect()->back()->with( "tags",Tag::all())->with( "categories",Category::all()) ->with('done' ,'The product '.$deletedProductName.' has been deleted successfully');
    }
    public function changestate($id)
    {   
        
        $product = Product::find($id);

        if($product->status == 1){
            $product->status =0;
            $product->save();
            $state = 'offline' ; 
        }
        else{
            $product->status =1;
            $product->save();
            $state = 'online' ; 
        }

         return redirect()->route('products')->with( "tags",Tag::all())->with( "categories",Category::all())->with('done' ,'The product '.$product->name.'\'s status has been updated to '.$state.' successfully');

    }
    
}
