<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hamura;

class HamuraController extends Controller
{
    public function index()
    {
    	$data_film = Hamura::all();
    	return view('hamura.index',['data_film' => $data_film]);
    }

    public function create(Request $request)
    {
        $data = Hamura::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('video/', $request->file('avatar')->getClientOriginalName());
            $data->avatar = $request->file('avatar')->getClientOriginalName();
            $data->save();
        }
    	return redirect('/hamura')->with('success','Data berhasil diinput');
    }

    public function edit($id)
    {
    	$data = Hamura::find($id);
    	return view('hamura.edit',['data' => $data]);
    }

    public function update(Request $request,$id)
    {
    	$data = Hamura::find($id);
        $data->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('video/', $request->file('avatar')->getClientOriginalName());
            $data->avatar = $request->file('avatar')->getClientOriginalName();
            $data->save();
        }

        // if(Request::hasFile('file')){

        //     $file = Request::file('file');
        //     $filename = $file->getClientOriginalName();
        //     $path = public_path().'/avatar/';
        //     return $file->move($path, $filename);
        // }
    	return redirect('/hamura')->with('success','Data berhasil di edit');
    }

    public function delete($id)
    {
    	$data = Hamura::find($id);
    	$data->delete();
    	return redirect('/hamura')->with('success','Data berhasil dihapus');
    }
}
