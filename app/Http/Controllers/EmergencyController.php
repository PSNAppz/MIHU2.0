<?php

namespace App\Http\Controllers;

use App\Emergency;
use Illuminate\Http\Request;
use Session;

class EmergencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth',['only' => 'create','store','edit','update','destroy']);
    }

    public function index()
    {
        $emergency = Emergency::orderBy('service')->get();
        return view('emergency.index')->withEmergency($emergency);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emergency.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'service'      => 'required|max:255',
           'name'      => 'required|max:255',
           'contact'  => 'required|max:255',
       ));
        // store in the database
        $emergency = new Emergency;
        $emergency->service = $request->service;
        $emergency->name = $request->name;
        $emergency->contact = $request->contact;
        $emergency->save();
        Session::flash('success', 'Emergency Details successfully added!');
    return redirect()->route('emergency.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function show(Emergency $emergency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function edit(Emergency $emergency)
    {
        $cont = Emergency::find($emergency->id);
        return view('emergency.edit')->withCont($cont);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emergency $emergency)
    {
        $cont = Emergency::find($emergency->id);
        $this->validata($request, array(
            'id' => 'required|numeric',
            'name' => 'required|max:255',
            'contactNum' => 'required|numeric',
            'category' => 'required|max:255',
            'place' => 'required|max:255',
            'available' => 'required|numeric'
        ));
        $input = $request->all();
        $cont->fill($input)->save();
        Session::flash('success', 'Emergency details successfully edited!');
        return redirect()->route('emergency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergency $emergency)
    {
        $cont = Emergency::find($emergency->id);
        $cont->delete();
        Session::flash('success', 'Emergency Details successfully removed');
        return redirect()->route('emergency.index');
    }
}
