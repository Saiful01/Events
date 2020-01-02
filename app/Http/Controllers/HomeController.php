<?php

namespace App\Http\Controllers;

use App\Event;
use App\Participant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
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

    public function index()
    {
         $event_count = Event::count();
         $par_count = Participant::count();
        return view('admin.home')
            ->with('event_count',$event_count)
            ->with('par_count',$par_count);
    }
}
