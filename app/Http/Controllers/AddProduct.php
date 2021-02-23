<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProduct extends Controller
{
    public function formulaireAddGames(){

        request()->validate([
            'name' =>['required'],
            'description' =>['required'],
        ]);

        Product::create([ 
            'name' => request('name'),
            'description' => request('description'), 
            'photo' => cloudinary()->upload(request()->file('gamepic')->getRealPath())->getSecurePath(),
            'a' => request('a'),
            'b' => request('b'), 
            'c' => request('c'),
            'd' => request('d'),
            'e' => request('e'),
        ]);

        $products = Product::all();
    }
}
