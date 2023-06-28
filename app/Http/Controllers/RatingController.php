<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


    
    class RatingController extends Controller
    {
        public function store(Request $request)
        {
            // Kiểm tra thông tin đầu vào
            $validatedData = $request->validate([
                'product_id' => 'required|exists:products,id',
                'rate' => 'required|integer|min:1|max:5',
            ]);
    
            $rating = new Rating();
            $rating->user_id = Auth::id(); // Lấy ID người dùng đăng nhập hiện tại
            $rating->product_id = $validatedData['product_id'];
            $rating->stars_rated = $validatedData['rate'];
            $rating->save();
    
            // Cập nhật thông tin đánh giá trung bình của sản phẩm
            $product = Product::find($validatedData['product_id']);
            $product->average_rating = $product->ratings()->avg('stars_rated');
            $product->save();
    
            return redirect()->route('products.show', ['id' => $validatedData['product_id']])->with('success', 'Đánh giá của bạn đã được gửi thành công.');
        }
    }