<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function CreateBrand(Request $request)
    {
        $brands=Brand::create($request->input());
        return $brands;
    }

    public function UpdateBrand(Request $request,$id)
    {
        $brands=Brand::where('id',$request->id)
        ->update($request->input());
        return $brands;
    }

    public function UpdateOrCreateBrand(Request $request,$id)
    {
        $brands=Brand::updateOrCreate(
            ['brandName'=>$request->brandName],
            $request->input()
        );
        return $brands;
    }

    public function DeleteBrand(Request $request)
    {
        $brands = Brand::where('id','=',$request->id)->delete();
        return $brands;
    }

    public function incrementOrDecrement()
    {
        $products =Product::where('id',1)->increment('price');
        return $products;
        
    }


    public function dataShow()
    {
       // $products = Product::all();// all data show
        //$products = Product::get();// all data show
        //$products = Product::first();// first data show
       // $products = Product::find(3);// 3rd data show
        $products = Product::pluck('price');// 3rd data show
        
        return $products;
    }


    public function aggregates()
    {
        $products = Product::count();
        $products = Product::max('price'); 
        $products = Product::min('price');
        $products = Product::avg('price');
        $products = Product::sum('price');
        return $products;
    }

public function selectUse()
{
    $products = Product::select('title')->distinct()->get();
    return $products;
}

    public function WhereClause()
    {
       // $products = Product::whereBetween('price',[1,400])->get();
        $products = Product::whereMonth('updated_at','04')->get();
        return $products;
    }
    



    public function demoAction()
    {
       // $products =  Product::orderBy('id','desc')->get();
        //$products =  Product::inRandomOrder('id')->get();
       // $products =  Product::latest('id')->get();
       // $products =  Product::groupBy('price')->get();
        $products =  Product::skip(10)->take(2)->get();
        return $products;
    }

    public function paginate()
    {
        $products =  Product::simplePaginate(2);
        return $products;

    }

}
 