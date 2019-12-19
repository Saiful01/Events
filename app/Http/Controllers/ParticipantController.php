<?php

namespace App\Http\Controllers;

use App\Event;
use App\Participant;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

          $qr_code=date( 'YmdHis');
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
                'qr_code' => $qr_code
            ];
            DB::table('event_regs')->insert($event_register_array);


            $event_details=Event::where('event_id',$request['event_id'])->first();
//return  view('pages.test')->with('result',$participant_array)->with('event',$event_register_array);


//TODO::pdf generate
//return  storage_path();

            try {
                $pdf = PDF::loadView('pages.ticket2',[ 'participant'=>$participant_array, 'result'=>$event_details]);
                 $pdf->save($qr_code.'.pdf');
                //return $pdf->stream('invoice.pdf');

                return;
                return $pdf->stream('qr_code.pdf');

            }
            catch (\Exception $exception){
                return $exception->getMessage();
                return back()->with('failed', $exception->getMessage());

            }



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
    public function edit($par_id)
    {
        $result = Participant::where('par_id', $par_id)->first();
        return view('admin.participant.edit')->with('result', $result);
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
        unset($request['_token']);
        $array = [
            'par_name' => $request['par_name'],
            'par_email' => $request['par_email'],
            'par_phone' => $request['par_phone'],
            'par_address' => $request['par_address'],

        ];


    // return  $request->all();
try {

Participant::where('par_id', $request['par_id'])->update($request->all());
return back()->with('success', "Successfully Updated");

} catch (\Exception $exception) {
    return $exception->getMessage();

    return back()->with('failed', $exception->getMessage());
}
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
