<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controller_produk extends Controller
{
    

    public function show()
    {
        $tampilproduk = DB::table('products')->get();
            // dd($users);
 
        return view('Front_end.produk', ['tampilproduk' => $tampilproduk]);
    }


}
