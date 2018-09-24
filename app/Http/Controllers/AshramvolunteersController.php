<?php

namespace App\Http\Controllers;

use App\Ashramvolunteers;
use Illuminate\Http\Request;
use App/LogEngine;
use Session;

class AshramvolunteersController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ashramvolunteers.add');   
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
            'section' => 'required|max:255',
            'seva_place' => 'nullable|max:255',
            'incharge' => 'required|numeric',
            'contact' => 'nullable|max:255'
        ]);
        $log = new LogEngine();
        $ashramvolunteers = new Ashramvolunteers();
        $ashramvolunteers->section = $request->section;
        $ashramvolunteers->seva_place = $request->seva_place;
        $ashramvolunteers->incharge = $request->incharge;
        $ashramvolunteers->contact  = $request->contact;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Ashramvolunteers";
        $log->actionval = 1;
        $log->detailed_data = $ashramvolunteers;
        $log->save();
        $ashramvolunteers->save();
        Session::flash('success', 'Ashramvolunteers Details successfully added!');
        return redirect()->route('#.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ashramvolunteers  $ashramvolunteers
     * @return \Illuminate\Http\Response
     */
    public function show(Ashramvolunteers $ashramvolunteers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ashramvolunteers  $ashramvolunteers
     * @return \Illuminate\Http\Response
     */
    public function edit(Ashramvolunteers $ashramvolunteers)
    {
        $ashramvolunteers = Ashramvolunteers::find($ashramvolunteers->id);
        return view('ashramvolunteers.edit')->withAshramvol($ashramvolunteers);
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ashramvolunteers  $ashramvolunteers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ashramvolunteers $ashramvolunteers)
    {
        $transport = Ashramvolunteers::find($ashramvolunteers->id);
        $this -> validate($request, [
            'section' => 'required|max:255',
            'seva_place' => 'nullable|max:255',
            'incharge' => 'required|numeric',
            'contact' => 'nullable|max:255'
            ]);
        $input = $request->all();
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Ashramvolunteers";
        $log->actionval = 2;
        $log->detailed_data = $ashramvolunteers;
        $log->save();
        $transport->fill($input)->save();
        Session::flash('success', 'Ashram Volunteers details successfully edited!');
        return redirect()->route('#.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ashramvolunteers  $ashramvolunteers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ashramvolunteers $ashramvolunteers)
    {
        $ashramvolunteers = Ashramvolunteers::find($ashramvolunteers->id);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Ashramvolunteers";
        $log->actionval = 3;
        $log->detailed_data = $ashramvolunteers;
        $log->save();
        $ashramvolunteers->delete();
        Session::flash('success', 'Ashram Volunteers details successfully removed!');
        return redirect()->route('ashramvolunteers.index');
    }
}
