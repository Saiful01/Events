<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.participant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $participant_array = [
            'par_name' => $request['par_name'],
            'par_email' => $request['par_email'],
            'par_phone' => $request['par_phone'],
            'par_address' => $request['par_address'],
        ];
        try {

            $participant_id = Participant::insertGetId($participant_array);

            $event_register_array = [
                'event_id' => $request['event_id'],
                'par_id' => $participant_id,
            ];
            DB::table('event_regs')->insert($event_register_array);

            return back()->with('success', "Successfully Registered for this event");


        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function show($event_id)
    {

        $results= DB::table('event_regs')
            ->join('participants', 'participants.par_id', '=', 'event_regs.par_id')
            ->where('event_regs.event_id', $event_id)
            ->get();

        return view('admin.participant.view')->with('result', $results);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
