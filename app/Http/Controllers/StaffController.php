<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use App\LogEngine;
use Auth;
use Session;

class StaffController extends Controller
{

    public function __construct(){
        
        $this->middleware('auth', ['only' => 'create' ,'store','edit','update','destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffvol.add');
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
               'contact'    => 'nullable|numeric'
           ));
       // store in the database
       $staff = new Staff;
       $staff->name = $request->name;
       $staff->seva = $request->seva;
       $staff->department = $request->department;
       $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="StaffVolunteer";
        $log->actionval = 1;
        $log->detailed_data = $staff;
        $log->save();
       $staff->save();
       $request->session()->flash('success', 'StaffVolunteer Details successfully added!');
       return redirect()->route('volunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $staff = Staff::find($staff->id);
        return view('staffvol.edit')->withStaff($staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $staff = Staff::find($staff->id);
        $this->validate($request, array(
                'name'          => 'required|max:255',
                'seva'        => 'required|max:255',
                'department'   => 'required|max:255',
                'contact'    => 'nullable|numeric'
            ));
            $input = $request->all();
            $log = new LogEngine();
            $log->user_id=Auth::user()->id;
            $log->name=Auth::user()->name;
            $log->action="StaffVolunteer";
            $log->actionval = 2;
            $log->detailed_data = $staff;
            $log->save();
            $staff->fill($input)->save();
            Session::flash('success', 'Staff Volunteer details successfully edited!');
            return redirect()->route('volunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff = Staff::find($staff->id);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="StaffVolunteer";
        $log->actionval = 3;
        $log->detailed_data = $staff;
        $log->save();
        $staff->delete();
        Session::flash('success', 'Staff Volunteer details successfully removed!');
        return redirect()->route('volunteer.index');
    }
}
