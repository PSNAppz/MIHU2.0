<?php

namespace App\Http\Controllers;

use App\FAQ;
use Illuminate\Http\Request;
use Session;


class FAQController extends Controller
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
            'id' => 'required|numeric',
            'question' => 'required|max:255',
            'answer' => 'required|max:255'
        ));

        $comment = new FAQ();
        $comment->id = $request->id;
        $comment->question = $request->question;
        $comment->answer = $request->answer;
        Session::flash('sucess', 'New Question Added');
        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $fAQ)
    {
        $comment = FAQ::find($fAQ->id);
        return view('faq.edit')->withComment($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $fAQ)
    {
        $comment = FAQ::find($fAQ->id);
        $this->validate($request, array(
            'id' => 'required|numeric',
            'question' => 'required|max:255',
            'answer' => 'required|max:255'
        ));
        $input = $request->all;
        $comment->fill($input)->save();
        Session::flash('success', 'Question Updated');
        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $fAQ)
    {
        $comment = FAQ::find($fAQ->id);
        $commment->delete();
        Session::flash('success', 'Question has been successfully removed');
        return redirect()->route('faq.index');
    }
}
