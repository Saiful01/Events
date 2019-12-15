<?php

namespace App\Http\Controllers;

use App\Event;
use App\Participant;
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
}
