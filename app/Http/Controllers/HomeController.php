<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hamura;
class HomeController extends Controller
{
    public function index(Request $request)
    {

        $data_film = Hamura::all();
        $data = $request->input('avatar');
        $data = $request->input('link');
        return view('/home', ['data_film' => $data_film]);
    }
}