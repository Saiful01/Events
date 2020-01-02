@extends('layouts.app')

@section('content')

    <style>

        .btn-big {
            height: 139px;
            line-height: 110px;
            font-size: 38px;
        }

    </style>


    <div class="container">
        <div class="card">

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="/event/view" class="btn btn-primary btn-big btn-block">
                        Event

                    </a>
                </div>

                <div class="col-md-4">
                    <button class="btn btn-success btn-big btn-block">
                        Total Participant
                        <p style="margin-top: -65px">{{ $par_count}}</p>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-danger btn-big btn-block">
                        Total Event

                        <p style="margin-top: -65px">{{ $event_count}}</p>


                    </button>


                </div>


            </div>
        </div>
    </div>
@endsection
