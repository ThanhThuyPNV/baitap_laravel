<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\product;
use App\Models\comment;
use App\Models\Type_product;
class PageController extends Controller
{
    
    public function getIndex(){							
        $slide =Slide::all();						
    	//return view('page.trangchu',['slide'=>$slide]);						
        $new_product = product::where('new',1)->get();
        $new_product_array= $new_product->toArray();
        $sanpham_khuyenmai = product::where('promotion_price','<>',0)->paginate(4);						
        //dd($new_product);							
    	return view('page.trangchu',compact('slide','new_product_array','sanpham_khuyenmai'));						
    }							
    						
    public function getDetail(Request $request){							
    	$sanpham = product:: where('id',$request->id)->first();
        $splienquan = product::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type)->paginate(3);						
        $comments =	comment::where('id_product',$request->id)->get();					
    	return view('page.chitiet_sanpham',compact('sanpham','splienquan','comments'));						
    }

    public function getLoaiSp(Request $type){							
    	$type_product = Type_product:: all();
        $sp_theoloai = product::where('id_type',$type)->get();
        $sp_khac =product::where('id_type','<>',$type)->paginate(3);
        return view('page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));					
    }

}
