<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoAction()
    {
        $products = DB::table('products')->get();
        return $products;
    }


    //single row data
    function DemoAction1()
    {
        $products = DB::table('brands')->first();
        return $products;
    }

    //single Specific row data
    function DemoAction2()
    {
        $products = DB::table('brands')->find(1);
        return $products;
    }

    //specific column data
    function DemoAction3()
    {
        // $products = DB::table('brands')->pluck('brandName', "id");
        $products = DB::table('brands')->pluck('brandImg', "brandName");
        return $products;
    }


    //aggregate function
    function DemoAction4()
    {

        
       /* $maxPrice = DB::table('products')->max('price');
        $minPrice = DB::table('products')->min('price');

        return ['max_price' => $maxPrice,'min_price' => $minPrice,];*/
        // $products = DB::table('products')->count(); //count 
        //$products = DB::table('products')->max('price'); //max 
        //$products = DB::table('products')->min('price'); //min 
        //$products = DB::table('products')->avg('price'); //avg 
        $products = DB::table('products')->sum('price'); //sum 
        return $products;
    }

    //select clause
    function DemoAction5()
    {
        $products = DB::table('products')->select('title', 'price', 'stock')->distinct()->get();
        return $products;
    }

    //inner join
    function DemoAction6()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')->get();
        return $products;
    }

    //left join
    function DemoAction7()
    {
        $products = DB::table('products')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')->get();
        return $products;
    }

    //right join
    function DemoAction8()
    {
        $products = DB::table('products')
            ->rightJoin('categories', 'products.category_id', '=', 'categories.id')
            ->rightJoin('brands', 'products.brand_id', '=', 'brands.id')->get();
        return $products;
    }

    //cross join
    function DemoAction9()
    {
        $products = DB::table('products')
            ->crossJoin('brands')->get();
        return $products;
    }

    //joinClause
    function DemoAction10()
    {
        $products = DB::table('products')
            ->join('categories', function (JoinClause $join) {
                $join->on('products.category_id', '=', 'categories.id')
                    ->where('products.price', '>', 2000);
            })->get();
        return $products;
    }

    //union
    function DemoAction11()
    {
        $products = DB::table('products')->where('price', '>', 2000);
        $products2 = DB::table('products2')->where('category_id', '=', 2)->union($products)->get();
        return $products2;
    }
}
