<?php

namespace App\Http\Controllers;

use App\LogEngine;
use Illuminate\Http\Request;
use DB;
use Session;
use Auth;

class LogEngineController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\LogEngine  $logEngine
     * @return \Illuminate\Http\Response
     */
    public function show(LogEngine $logEngine)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogEngine  $logEngine
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogEngine $logEngine)
    {
      DB::table('log_engines')->truncate();
      $log = new LogEngine();
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Logs";
      $log->actionval = 4;
      $log->save();
      Session::flash('success', 'Logs Cleared');
      return redirect()->back();
    }
}
