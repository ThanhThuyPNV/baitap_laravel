<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "products";

    public function type_products(){
        return $this ->belongsTo("App\Type_product");
        //Belongsto: ngược lại bảng type_product thuộc về products
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    
    public function bill_details(){
        return $this ->belongsTo("App\bill_detail");
    }
}
