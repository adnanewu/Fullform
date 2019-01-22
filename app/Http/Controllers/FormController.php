<?php

namespace App\Http\Controllers;
use App\info;
use Illuminate\Http\Request;

class FormController extends Controller
{
    
    
    public function index()
    {
    	return view('index');
    }
    public function store(Request $request)
    {
    	$input=$request->all();
    	info::create($input);
    	return redirect('/')->with('msg','Insert Data Successfully');

    }
    public function create()
    {
    	$data=info::get();
    	return view('listdata',compact('data'));
    }
    public function show($id)
    {
        $data=info::where('id',$id)->first();
        $data->delete();
        return redirect('ListData');
    }
    public function edit($id)
    {
        $data=info::where('id',$id)->first();
        return view('studedit',compact('data'));
    }
    public function updateData(Request $req,$id)
    {
        $input=$req->all();
        $data=info::where('id',$id)->first();
        $data->update($input);
        return redirect('ListData');
    }
}
