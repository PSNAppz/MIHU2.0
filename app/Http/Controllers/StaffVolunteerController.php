<?php

namespace App\Http\Controllers;

use App\Coordinator;
use App\StaffVolunteer;
use Illuminate\Http\Request;
use Session;
use App\LogEngine;
use Auth;

class StaffVolunteerController extends Controller
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
        return view('staff.add');
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
               
           ));
       // store in the database
       $staff = new StaffVolunteer;
       $staff->name = $request->name;
       $staff->seva = $request->seva;
       $staff->department = $request->department;
       $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Staff Coordinator";
        $log->actionval = 1;
        $log->detailed_data = $staff;
        $log->save();
       $staff->save();
       $request->session()->flash('success', 'Staff Coordinator Details successfully added!');
       return redirect()->route('staffvolunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StaffVolunteer  $staffVolunteer
     * @return \Illuminate\Http\Response
     */
    public function show(StaffVolunteer $staffVolunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StaffVolunteer  $staffVolunteer
     * @return \Illuminate\Http\Response
     */
    public function edit($staffVolunteer)
    {
        $staff = StaffVolunteer::find($staffVolunteer);
        return view('staff.edit')->withStaff($staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StaffVolunteer  $staffVolunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$staffVolunteer)
    {
        $staff = StaffVolunteer::find($staffVolunteer);
        $this->validate($request, array(
                'name'          => 'required|max:255',
                'seva'        => 'required|max:255',
                'department'   => 'required|max:255',
            ));
            $input = $request->all();
            $log = new LogEngine();
            $log->user_id=Auth::user()->id;
            $log->name=Auth::user()->name;
            $log->action="Staff Coordinator";
            $log->actionval = 2;
            $log->detailed_data = $staff;
            $log->save();
            $staff->fill($input)->save();
            Session::flash('success', 'Staff Coordinator details successfully edited!');
            return redirect()->route('staffvolunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StaffVolunteer  $staffVolunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($staffVolunteer)
    {
        $staff = StaffVolunteer::find($staffVolunteer);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Staff Coordinator";
        $log->actionval = 3;
        $log->detailed_data = $staff;
        $log->save();
        $staff->delete();
        Session::flash('success', 'Staff Coordinator details successfully removed!');
        return redirect()->route('staffvolunteer.index');
    }
}
