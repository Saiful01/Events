@extends('layouts.common')
@section('content')



    <div class="container">
        <div class="card">
            <div class="card-body">
                <img class="details-img" alt="Thumbnail [200x250]"
                     src="/eventimg/{{$result->image}}" width="100%">

                <hr>


                <h2>{{$result->event_title}}</h2>
                <p>{{$result->event_venue}}</p>

                <p>
                    {!!  $result->event_details !!}
                </p>
                <p>Date: {{$result->event_date}}</p>

                <p><b> Payment System: </b> {{$result->is_paid}}</p>
                <p><b>Event Fee: </b> {{$result->event_fee}}</p>
                <a class="btn btn-info" href="/pages/reg/{{$result->event_id}}"> Registration </a>
            </div>

        </div>

    </div>



@endsection
