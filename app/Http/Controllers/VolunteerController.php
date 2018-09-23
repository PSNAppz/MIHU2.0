<?php
namespace App\Http\Controllers;
use App\Volunteer;
use Illuminate\Http\Request;
use Session;

class VolunteerController extends Controller

{
    public

    function __construct()
    {
        $this->middleware('auth', ['only' => 'create', 'store', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public

    function index()
    {
        $volunteers = Volunteer::get();
        return view('volunteer.index')->withVolunteers($volunteers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public

    function create()
    {
        return view('Volunteer.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public

    function store(Request $request)
    {

        // validate the data

        $this->validate($request, array(
            'name' => 'required|max:255',
            'batch' => 'required|max:255',
            'campus' => 'required|max:255',
            'contact' => 'required|numeric',
            'seva' => 'required|max:255',
            'cordname' => 'required|max:255',
            'cordcontact' => 'required|numeric',
        ));

        // store in the database

        $volunteers = new Volunteer;
        $volunteers->name = $request->name;
        $volunteers->batch = $request->batch;
        $volunteers->campus = $request->campus;
        $volunteers->contact = $request->contact;
        $volunteers->seva = $request->seva;
        $volunteers->cordname = $request->cordname;
        $volunteers->cordcontact = $request->cordcontact;
        $volunteers->save();
        $request->session()->flash('success', 'Volunteer Details successfully added!');
        return redirect()->route('volunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function show($id)
    {

        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function edit($id)
    {
        $volunteers = Volunteer::find($id);
        return view('Volunteer.edit')->withVolunteers($volunteers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function update(Request $request, $id)
    {
        $cord = Volunteer::find($id);
        $this->validate($request, array(
            'name' => 'required|max:255',
            'batch' => 'required|max:255',
            'campus' => 'required|max:255',
            'contact' => 'required|numeric',
            'seva' => 'required|max:255',
            'cordname' => 'required|max:255',
            'cordcontact' => 'required|numeric',
        ));
        $input = $request->all();
        $cord->fill($input)->save();
        Session::flash('success', 'Volunteer details successfully edited!');
        return redirect()->route('volunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function destroy($id)
    {
        $cord = Volunteer::find($id);
        $cord->delete();
        Session::flash('success', 'Volunteer details successfully removed!');
        return redirect()->route('volunteer.index');
    }
}

