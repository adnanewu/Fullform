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
    	
        $this->validate($request,[
        'Household_Number'=>'required|max:10',
        'Household_Name'=>'required|max:10',
        'Father_Husband_Name'=>'required|max:8',
		'Mother_Name'=>'required|max:8',
        'Occupation'=>'required|max:8',
        'Mobile'=>'required|max:8',
        'NID_Passport'=>'required|max:8',
        'Education'=>'required|max:8',
        'Date_of_Birth'=>'required',
        'gender'=>'required|max:8',
        'Religion'=>'required|max:8',
        'Marital_Status'=>'required|max:8',
        'Present_Address'=>'required|max:8',
        'Ward'=>'required|max:8',
        'Thana'=>'required|max:8',
        'District'=>'required|max:8',
        'Affected_Land_No'=>'required|max:8',
        'Yearly_income'=>'required|max:8',
        'have_you_taken_any_traning_before'=>'required',
        'If_yes_then_how_many_days'=>'required',
        'Do_you_have_any_particular_trainning'=>'required',
        'Do_you_want_any_training'=>'required']);

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
        return view('infoedit',compact('data'));
    }
    public function updateData(Request $req,$id)
    {
        $input=$req->all();
        $data=info::where('id',$id)->first();
        $data->update($input);
        return redirect('ListData');
        $this->validate($request,[
        'Household_Number'=>'required|max:10',
        'Household_Name'=>'required|max:10',
        'Father_Husband_Name'=>'required|max:8',
		'Mother_Name'=>'required|max:8',
        'Occupation'=>'required|max:8',
        'Mobile'=>'required|max:8',
        'NID_Passport'=>'required|max:8',
        'Education'=>'required|max:8',
        'Date_of_Birth'=>'required',
        'gender'=>'required|max:8',
        'Religion'=>'required|max:8',
        'Marital_Status'=>'required|max:8',
        'Present_Address'=>'required|max:8',
        'Ward'=>'required|max:8',
        'Thana'=>'required|max:8',
        'District'=>'required|max:8',
        'Affected_Land_No'=>'required|max:8',
        'Yearly_income'=>'required|max:8',
        'have_you_taken_any_traning_before'=>'required',
        'If_yes_then_how_many_days'=>'required',
        'Do_you_have_any_particular_trainning'=>'required',
        'Do_you_want_any_training'=>'required']);

    }
}
