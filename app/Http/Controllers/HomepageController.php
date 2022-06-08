<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller{
    
    public function getSomeItems(){
        return response()->json([
            "status" => "Success",
            "restos" => 'hello world'
        ], 200);
    }
}
