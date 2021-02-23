<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function formulaireAddGames(){

        request()->validate([
            'description' =>['required'],
        ]);

        Game::create([ 
            'description' => request('description'), 
            'photo' => cloudinary()->upload(request()->file('gamepic')->getRealPath())->getSecurePath(),
            'a' => request('a'),
            'b' => request('b'), 
            'c' => request('c'),
            'd' => request('d'),
            'e' => request('e'),
            'f' => request('f'),
            'g' => request('g'),
            'h' => request('h'),
            'i' => request('i'),
            'j' => request('j'),
        ]);

        $games = Game::all();
        return view('Admin/adminGames', [
            'games' => $games,
        ] );
    }
}
