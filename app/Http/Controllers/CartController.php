<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function add(Request $request){
        $produto = $request->get('produto');
        dd($produto);
    }
}
