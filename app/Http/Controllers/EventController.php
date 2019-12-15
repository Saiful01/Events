<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check()) {
                return Redirect::to('/admin/login');
            }
            return $next($request);
        });
    }

    public function create()
    {
        return view('admin.event.create');
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'event_title' => 'required',
            'event_details' => 'required',
            'event_date' => 'required',
            'event_venue' => 'required',
            'event_fee' => 'required|numeric',

        ]);
        if ($validator->fails()) {
            return back()->with('failed', "Check Required Filed");
        }


        unset($request['_token']);
        //return $request->all();
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/eventimg');
            $image->move($destinationPath, $image_name);
            $array = [
                'event_title' => $request['event_title'],
                'event_details' => $request['event_details'],
                'event_date' => $request['event_date'],
                'event_venue' => $request['event_venue'],
                'is_paid' => $request['is_paid'],
                'event_fee' => $request['event_fee'],
                'image' => $image_name,
            ];
        } else {
            $array = [
                'event_title' => $request['event_title'],
                'event_details' => $request['event_details'],
                'event_date' => $request['event_date'],
                'event_venue' => $request['event_venue'],
                'is_paid' => $request['is_paid'],
                'event_fee' => $request['event_fee'],
            ];
        }


        try {
            Event::create($array);

            return redirect()->to('/event/view')->with('success', "Successfully Saved");
        } catch (\Exception $exception) {

            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());

        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.event.view')->with('result', Event::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit($event_id)
    {
        $result = Event::where('event_id', $event_id)->first();
        return view('admin.event.edit')->with('result', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //return $request;
        unset($request['_token']);
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/eventimg');
            $image->move($destinationPath, $image_name);
            $array = [
                'event_title' => $request['event_title'],
                'event_details' => $request['event_details'],
                'event_date' => $request['event_date'],
                'event_vanue' => $request['event_vanue'],
                'is_paid' => $request['is_paid'],
                'event_fee' => $request['event_fee'],
                'image' => $image_name,
            ];
        } else {
            $array = [
                'event_title' => $request['event_title'],
                'event_details' => $request['event_details'],
                'event_date' => $request['event_date'],
                'event_vanue' => $request['event_vanue'],
                'is_paid' => $request['is_paid'],
                'event_fee' => $request['event_fee'],
            ];
        }


        // return  $request->all();
        try {

            Event::where('event_id', $request['event_id'])->update($request->all());
            return back()->with('success', "Successfully Updated");

        } catch (\Exception $exception) {
            return $exception->getMessage();

            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            Event::where('event_id', $id)->delete();
            return back()->with('success', "Successfully Deleted");
        } catch (\Exception $exception) {


            return back()->with('failed', $exception->getMessage());
        }
    }

    public function participant($id)
    {


        return $id;
        $result = DB::table('event_regs')
            ->where('event_id', $id)
            ->leftjoin('participants', 'event_regs.par_id', '=', 'participants.par_id')
            /* ->leftjoin('events', 'event_regs.event_id', '=', 'events.event_id')*/
            ->get();
        return view('admin.EventReg.view')->with('result', $result);
    }
}
