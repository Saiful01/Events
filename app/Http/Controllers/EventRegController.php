<?php

namespace App\Http\Controllers;

use App\Event_Reg;
use Illuminate\Http\Request;
use DB;

class EventRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(){




}

public
function index()
{
    //
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public
function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */
public
function store(Request $request)
{
    //
}

/**
 * Display the specified resource.
 *
 * @param \App\Event_Reg $event_Reg
 * @return \Illuminate\Http\Response
 */

public
function show($id)
{
    $result = DB::table('event_regs')
        ->where('event_id', $id)
        ->leftjoin('participants', 'event_regs.par_id', '=', 'participants.par_id')
        /* ->leftjoin('events', 'event_regs.event_id', '=', 'events.event_id')*/
        ->get();
    return $result;
    return view('admin.EventReg.view')->with('result', $result);
}

/**
 * Show the form for editing the specified resource.
 *
 * @param \App\Event_Reg $event_Reg
 * @return \Illuminate\Http\Response
 */
public
function edit(Event_Reg $event_Reg)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param \App\Event_Reg $event_Reg
 * @return \Illuminate\Http\Response
 */
public
function update(Request $request, Event_Reg $event_Reg)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param \App\Event_Reg $event_Reg
 * @return \Illuminate\Http\Response
 */
public
function destroy(Event_Reg $event_Reg)
{
    //
}
}
