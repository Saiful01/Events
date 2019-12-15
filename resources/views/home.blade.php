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
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="/event/view" class="btn btn-primary btn-big btn-block">
                    Event

                </a>
            </div>

            <div class="col-md-4">
                <a href="/participant/view" class="btn btn-secondary btn-big btn-block">
                    Participant

                </a>
            </div>
            <div class="col-md-4">
                <a href="/EventReg/view" class="btn btn-success btn-big btn-block">
                    Event Registered

                </a>
            </div>


        </div>
    </div>
    </div>
@endsection
