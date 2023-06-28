<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table ='ratings';
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    protected $fillable =[
        'user_id',
        'product_id',
        'stars_rated',
    ];
}