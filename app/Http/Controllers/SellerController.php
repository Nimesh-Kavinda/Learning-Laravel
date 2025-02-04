<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;


class SellerController extends Controller
{
    //
    
    function list(){
        return Seller::find(1)->ProductData;
    }

    function ManyRel(){
        return Seller::find(1)->ProductMany;
    }

    function ManyToOne(){
        return Product::with('seller')->get();
       
    }

}
