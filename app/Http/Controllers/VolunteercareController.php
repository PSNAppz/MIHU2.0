<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Volunteercare;
use App\LogEngine;

class VolunteercareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create', 'store', 'edit', 'update', 'destroy']);
    }
    public function index()
    {
        $volunteercare = Volunteercare::orderBy('food')->get();
        return view('volunteercare.index')->withVcc($volunteercare);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteercare.add');
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
            'food' => 'required|max:255',
            'time' => 'required|max:255',
            'place' => 'nullable|max:255'
        ]);
        $log = new LogEngine();
        $vcc = new Volunteercare();
        $vcc->food = $request->food;
        $vcc->time = $request->time;
        $vcc->place = $request->place;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Volunteercare";
        $log->actionval = 1;
        $log->detailed_data = $vcc;
        $log->save();
        $vcc->save();
        Session::flash('success', 'Volunteer Care Details successfully added!');
        return redirect()->route('volunteercare.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteercare $volunteercare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteercare $volunteercare)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteercare $volunteercare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteercare $volunteercare)
    {
        $vcc = Volunteercare::find($volunteercare->id);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Volunteercare";
        $log->actionval = 3;
        $log->detailed_data = $vcc;
        $log->save();
        $vcc->delete();
        Session::flash('success', 'Volunteercare details successfully removed!');
        return redirect()->route('volunteercare.index');
    }
}
