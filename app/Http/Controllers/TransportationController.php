<?php

namespace App\Http\Controllers;

use App\Transportation;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\LogEngine;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth', ['only' => 'create' ,'store','edit','update','destroy']);
    }
    public function index()
    {
        $transportation = Transportation::orderBy('destination')->get();
        return view('transportation.index')->withTransportation($transportation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [   
        	'mode' => 'required|max:255',
            'busno' => 'required|max:255',
        	'contact' => 'required|numeric',
        	'from' => 'required|max:255',
        	'destination' => 'required|max:255',
        	'deptime' => 'required|max:255',
            'parking' => 'required|max:255'
        ]);
        $log = new LogEngine();
        $transportation = new Transportation();
        $transportation->mode = $request->mode;
        $transportation->busno = $request->mode;
        $transportation->contact = $request->contact;
        $transportation->from  = $request->from;
        $transportation->destination = $request->destination;
        $transportation->deptime = $request->deptime;
        $transportation->parking = $request->parking;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Transportation";
        $log->actionval = 1;
        $log->detailed_data = $transportation;
        $log->save();
        $transportation->save();
        Session::flash('success', 'Transportation Details successfully added!');
        return redirect()->route('transportation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transportation  $transportation
     * @return \Illuminate\Http\Response
     */
    public function show(Transportation $transportation)
    {
        //
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transportation  $transportation
     * @return \Illuminate\Http\Response
     */
    public function edit(Transportation $transportation)
    {
        $transport = Transportation::find($transportation->id);
        return view('transportation.edit')->withTransportation($transport);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transportation  $transportation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transportation $transportation)
    {
        $transport = Transportation::find($transportation->id);
        $this -> validate($request, [
            'mode' => 'required|max:255',
            'busno' => 'required|max:255',
            'contact' => 'required|numeric',
            'from' => 'required|max:255',
            'destination' => 'required|max:255',
            'deptime' => 'required|max:255',
            'parking' => 'required|max:255'
            ]);
        $input = $request->all();
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Transportation";
        $log->actionval = 2;
        $log->detailed_data = $transportation;
        $log->save();
        $transport->fill($input)->save();
        Session::flash('success', 'Transportation details successfully edited!');
        return redirect()->route('transportation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transportation  $transportation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transportation $transportation)
    {
        $transportation = Transportation::find($transportation->id);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Transportation";
        $log->actionval = 3;
        $log->detailed_data = $transportation;
        $log->save();
        $transportation->delete();
        Session::flash('success', 'Transportation details successfully removed!');
        return redirect()->route('transportation.index');
    }
}
