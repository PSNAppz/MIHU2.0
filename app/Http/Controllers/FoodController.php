<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\LogEngine;

class FoodController extends Controller
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
        $food = Food::orderBy('meal')->get();
        return view('food.index')->withFood($food);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('food.add');        
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
            'meal' => 'required|max:255',
            'time' => 'nullable|max:255',
            'place' => 'nullable|max:255',
            'counter'=> 'nullable|max:255'
        ]);
        $log = new LogEngine();
        $food = new Food();
        $food->meal  = $request->meal;
        $food->time = $request->time;
        $food->place = $request->place;
        $food->counter = $request->counter;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Food";
        $log->actionval = 1;
        $log->detailed_data = $food;
        $log->save();
        $food->save();
        Session::flash('success', 'Food Details successfully added!');
        return redirect()->route('food.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $fd = Food::find($food->id);
        return view('food.edit')->withFood($fd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $fd = Food::find($food->id);
        $this->validate($request, array(
            'meal' => 'required|max:255',
            'time' => 'nullable|max:255',
            'place' => 'nullable|max:255',
            'counter'=> 'nullable|max:255'
            ));
        $input = $request->all();
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Food";
        $log->actionval = 2;
        $log->detailed_data = $fd;
        $log->save();
        $food->fill($input)->save();
        Session::flash('success', 'Food details successfully edited!');
        return redirect()->route('food.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food = Food::find($food->id);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Food";
        $log->actionval = 3;
        $log->detailed_data = $food;
        $log->save();
        $food->delete();
        Session::flash('success', 'Food details successfully removed!');
        return redirect()->route('food.index');
    }
}
