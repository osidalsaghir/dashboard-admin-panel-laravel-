<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 
use App\Category;
use App\Tag ; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all()->count() ; 
        $tag = Tag::all()->count() ; 
        $product = Product::all();
        $numberOfProducts = $product->count();
        if($numberOfProducts != 0){
            /* preventing from dividing on 0 */
            $offlineProducts = $product->where('status', 0)->count();
            $onlineProducts = $product->where('status', 1)->count();
            $percentageOffline = (100 * $offlineProducts) / $numberOfProducts ; 
            $percentageOnline = (100 * $onlineProducts) / $numberOfProducts ; 

        }
        else{

            $offlineProducts = 0;
            $onlineProducts = 0;
            $percentageOffline = 0 ; 
            $percentageOnline = 0; 
        }
        
        return view('home')
        ->with('online' ,$percentageOnline )
        ->with('offline' ,$percentageOffline )
        ->with('productsCount' ,$numberOfProducts )
        ->with('onlineProductsCount' ,$onlineProducts)
        ->with('offlineProductsCount' ,$offlineProducts )
        ->with('categoryCount' ,$category )
        ->with('tagCount' ,$tag );
    }
}
