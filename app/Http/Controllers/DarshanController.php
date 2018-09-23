<?php

namespace App\Http\Controllers;

use App\Darshan;
use Illuminate\Http\Request;
use Session;

class DarshanController extends Controller
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
        $darshan = Darshan::all();
        return view('darshan.index')->withDarshan($darshan);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('darshan.add');
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
            'date' => 'required|max:255',
            'darshan_time' => 'required|max:255',
            'token_loc' => 'required|max:255',
            'token_time' => 'required|max:255'
        ));
        $darshan = new Darshan();
        $darshan->darshan_time = $request->darshan_time;
        $darshan->date = $request->date;
        $darshan->token_loc = $request->token_loc;
        $darshan->token_time = $request->token_time;
        $darshan->save();
        Session::flash('success', 'Darshan token details has been added Successfully!');
        return redirect()->route('darshan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Darshan  $darshan
     * @return \Illuminate\Http\Response
     */
    public function show(Darshan $darshan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Darshan  $darshan
     * @return \Illuminate\Http\Response
     */
    public function edit(Darshan $darshan)
    {
        $darsh = Darshan::find($darshan->id);
        return view('darshan.edit')->withDarsh($darsh);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Darshan  $darshan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Darshan $darshan)
    {
        $darsh = Darshan::find($darshan->id);
        $this -> validate($request, [
            'date' => 'required|max:255',
            'darshan_time' => 'required|max:255',
            'token_loc' => 'required|max:255',
            'token_time' => 'required|max:255'
        ]);
        $input = $request->all();
        $darsh->fill($input)->save();
        Session::flash('success', 'Darshan details has been updated!');
        return redirect()->route('darshan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Darshan  $darshan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Darshan $darshan)
    {
        $darsh = Darshan::find($darshan->id);
        $darsh->delete();
        Session::flash('success', 'Darshan details has been removed!');
        return redirect()->route('darshan.index');
    }
}
