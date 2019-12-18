@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="car-header custom-header">
            <a class="btn btn-success float-right" href="/event/create">New</a>

        </div>
        <div class="card-body">

            @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
            @endif

            @if(Session::has('failed'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
            @endif
            <table class="table table-borderd">
                <thead>
                <tr>

                    <th>#</th>
                    <th>Title</th>
                  {{--  <th>Details</th>--}}
                    <th>Dates</th>
                    <th>Venue</th>
                    <th>Payment</th>
                    <th>Fee</th>
                    <th>image</th>
                    <th>Action</th>


                </tr>
                </thead>
                @php($i=1)
                @foreach($result as $res)
                    <tr>
                        <td>{{$i++}} </td>
                        <td>{{$res->event_title}} </td>
                      {{--  <td>{{$res->event_details}} </td>--}}
                        <td> {{$res->event_date}} </td>
                        <td>{{$res->event_venue}}</td>
                        <td>@if($res->is_paid) Paid @else Free @endif</td>
                        <td>{{$res->event_fee}}</td>
                        <td>{{$res->image}}</td>

                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/event/edit/{{$res->event_id}}">Edit</a>
                                    <a class="dropdown-item" href="/event/delete/{{$res->event_id}}">Delete</a>
                                    <a class="dropdown-item" href="/participant/view/{{$res->event_id}}">Participant</a>
                                </div>
                            </div>
                        </td>



                    </tr>

                @endforeach


            </table>
        </div>
    </div>


@endsection
