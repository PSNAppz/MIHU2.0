<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;
use Session;
use App\LogEngine;
use Auth;
use App\live;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth', ['only' => 'create', 'store', 'edit', 'update', 'destroy']);
    }


    public function index()
    {
        $live = live::all();
        // echo($live);
        return view('welcome')->withLive($live);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function storeLink(Request $request){
        $this->validate($request, array(
            'link' => 'required',
        ));
        // store in the database
        $live = new live;
        $log = new LogEngine();
        $live->link = $request->link;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Link";
        $log->actionval = 1;
        $log->detailed_data = $live;
        $log->save();
        $live->save();
        Session::flash('success', 'Live Link added successfully added!');
        return redirect()->back();
    }

    public function destroyLink(live $live)
    {
        $live = live::find($live->id);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Live";
        $log->actionval = 3;
        $log->detailed_data = $live;
        $log->save();
        $live->delete();
        Session::flash('success', 'Live details successfully removed!');
        return redirect()->back();
    } 

    public function create()
    {
        //
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
            'message' => 'required|max:255',
        ));
    // store in the database
    $information = new Information;
    $log = new LogEngine();
    $information->message = $request->message;
    $log->user_id=Auth::user()->id;
    $log->name=Auth::user()->name;
    $log->action="Information";
    $log->actionval = 1;
    $log->detailed_data = $information;
    $log->save();
    $information->save();
    Session::flash('success', 'Information Details successfully added!');
    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        $info = Information::find($information->id);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Information";
        $log->actionval = 3;
        $log->detailed_data = $info;
        $log->save();
        $info->delete();
        Session::flash('success', 'Information details successfully removed!');
        return redirect()->back();
    }
}
