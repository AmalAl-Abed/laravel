<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index(Request $request)
    {
          $id=$request->search;
        if(isset($id)){
        $data=Register::where('id',$id)->get();
        return view('registers.index', compact('data'));
    }else{

        $data=Register::all();
        return view('registers.index', compact('data'));

    }

}


    public function create()
    {

        return view('registers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Register::create($request->all());

        return redirect()->route('registers.index')->with('success','user created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
         return view('registers.show',compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        return view('registers.edit',compact('register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
      $register->update($request->all());
        return redirect()->route('registers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {

        $register->delete();

       return redirect()->route('registers.index');

    }

}
