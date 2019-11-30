<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hamura;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $data_film = Hamura::all();
        $data_film = Hamura::all()->take(4);
        $data = $request->input('avatar');
        $data = $request->input('link');
        return view('/home', ['data_film' => $data_film]);
    }
}