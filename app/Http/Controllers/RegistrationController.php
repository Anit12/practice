<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegisterPostRequest;
use App\Models\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations= Registration::all();
        return view('registrations.index',compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view('registrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegisterPostRequest $request)
    {
        $registrations = Registration::all();
        $Registration= new Registration;
        $Registration->name= $request->input('name');
        $Registration->fname= $request->input('fname','anit');
        $Registration->password= $request->input('password');
        //dd($Registration);
        $Registration->save();
       
        return view('registrations.index',compact('registrations'));
        // return view('registrations.index', compact('registrations'))->with('status','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $registrations=Registration::find($id);
        return view('registrations.edit', compact('registrations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Registration= Registration::find($id);
        $Registration->name= $request->input('name');
        $Registration->fname= $request->input('fname','anit');
        $Registration->password= $request->input('password');
        //dd($Registration);
        $Registration->update();
       
            
        return redirect('registrations.thankyou')->with('status','updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registrations= Registration::find($id);
        $registrations->delete();
        
        //return view('categories.index', compact(varname: 'categories'));
        //return view('index',['categories.index'=> $categories]);
        return redirect()->route('registrations.index');
    }
}
