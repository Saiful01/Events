<?php

namespace App\Http\Controllers;

use App\Event;
use App\Participant;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function detail($id){

        $result=Event::where('event_id',$id)->first();
        return view('pages.details')->with('result',$result);

    }
    public function reg($id){

        $result=Event::where('event_id',$id)->first();
        return view('pages.reg')
            ->with('id',$id)
            ->with('result',$result);

    }
//    public function test(){
//
//
//
//        $result=\App\Event::get();
//
//        $pdf = PDF::loadView('pages.ticket2',['result' => $result,]);
//        //return $pdf->stream('invoice.pdf');
//        return $pdf->download('motiur.pdf');
//
//    }
}
