<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\product;
class PageController extends Controller
{
    
    public function getIndex(){
        $slide= slide::all();

        //return view('page.trangchu',['slide'=>$slide]);
        $new_product = product::where('new',1)->get();
        $new_product_array= $new_product->toArray();
        return view('page.trangchu',compact('slide','new_product_array'));
    }

    public function getLoaiSP(){
        return view('page.loai_sanpham');
    }
}
