<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAbout extends Controller
{
   public function aboutUs(){
        return view('Front_end/about_us');
   }
}
