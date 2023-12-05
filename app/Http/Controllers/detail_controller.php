<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class detail_controller extends Controller
{
    public function detailProduk($id)
    {
        return Product::findOrFail($id);
        
    }
}
