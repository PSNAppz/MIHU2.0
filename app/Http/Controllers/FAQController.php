<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;
use Session;
use App\LogEngine;
use Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = FAQ::all();
        return view('faq.index')->withComment($comment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faq.add');

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
            'question' => 'required|max:255',
            'answer' => 'required|max:255'
        ));

        $comment = new FAQ();
        $comment->question = $request->question;
        $comment->answer = $request->answer;
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="FAQ";
        $log->actionval = 1;
        $log->detailed_data = $comment;
        $log->save();
        $comment->save();
        Session::flash('sucess', 'New Question Added');
        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        $comment = FAQ::find($faq->id);
        return view('faq.edit')->withComment($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $comment = FAQ::find($faq->id);
        $this->validate($request, array(
            'id' => 'required|numeric',
            'question' => 'required|max:255',
            'answer' => 'required|max:255'
        ));
        $input = $request->all;
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="FAQ";
        $log->actionval = 2;
        $log->detailed_data = $comment;
        $log->save();
        $comment->fill($input)->save();
        Session::flash('success', 'Question Updated');
        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $comment = FAQ::find($faq->id);
        $log = new LogEngine();
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="FAQ";
        $log->actionval = 3;
        $log->detailed_data = $comment;
        $log->save();
        $comment->delete();
        Session::flash('success', 'Question has been successfully removed');
        return redirect()->route('faq.index');
    }
}
