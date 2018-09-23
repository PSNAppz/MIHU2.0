<?php

namespace App\Http\Controllers;

use App\Coordinator;
use App\StaffVolunteer;
use Illuminate\Http\Request;
use App\LogEngine;
use Session;

class CoordinatorController extends Controller
{

    public function __construct()
     {
         $this->middleware('auth',['only' => 'create','store','edit','update','destroy']);
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinators = Coordinator::get();
        $staff = StaffVolunteer::get();
        return view('coordinator.index')->withCoordinators($coordinators)->withStaff($staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coordinator.add');
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
               'name'          => 'required|max:255',
               'seva'        => 'required|max:255',
               'department'   => 'required|max:255',
               'contact'          => 'required|numeric',
           ));
       // store in the database
       $coordinators = new Coordinator;
       $coordinators->name = $request->name;
       $coordinators->seva = $request->seva;
       $coordinators->department = $request->department;
       $coordinators->contact = $request->contact;
       $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Coordinator";
        $log->actionval = 1;
        $log->detailed_data = $acoordinators;
        $log->save();
       $coordinators->save();
       $request->session()->flash('success', 'Coordinator Details successfully added!');
       return redirect()->route('coordinator.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinator $coordinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinator $coordinator)
    {
        $cord = Coordinator::find($coordinator->id);
        return view('Coordinator.edit')->withCord($cord);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coordinator $coordinator)
    {
        $cord = Coordinator::find($coordinator->id);
        $this->validate($request, array(
                'name'         => 'required|max:255',
                'seva'         => 'required|max:255',
                'department'   => 'required|max:255',
                'contact'      => 'required|numeric',
            ));
            $input = $request->all();
            $log = new LogEngine();
            $log->user_id=Auth::user()->id;
            $log->name=Auth::user()->name;
            $log->action="Coordinator";
            $log->actionval = 2;
            $log->detailed_data = $cord;
            $log->save();
            $cord->fill($input)->save();
            Session::flash('success', 'Coordinator details successfully edited!');
            return redirect()->route('coordinator.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinator $coordinator)
    {
        $cord = Coordinator::find($coordinator->id);
        $log = new LogEngine();
            $log->user_id=Auth::user()->id;
            $log->name=Auth::user()->name;
            $log->action="Coordinator";
            $log->actionval = 3;
            $log->detailed_data = $cord;
            $log->save();
        $cord->delete();
        Session::flash('success', 'Coordinator details successfully removed!');
        return redirect()->route('coordinator.index');
    }
}
