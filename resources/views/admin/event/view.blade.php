@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="card">
            <h1 class="car-header">
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

                        <th>Event Title</th>
                        <th>Event Details</th>
                        <th>Event Dates</th>
                        <th>Event Vanue</th>
                        <th>Payment System</th>
                        <th>Event Fee</th>
                        <th>Event image</th>
                        <th>Edit</th>
                        <th>delete</th>
                        <th>Participant</th>



                    </tr>
                    </thead>

                    @foreach($result as $res)
                        <tr>
                            <td>{{$res->event_title}} </td>
                            <td>{{$res->event_details}} </td>
                            <td>{{$res->event_date}} </td>
                            <td>{{$res->event_venue}}</td>
                            <td>{{$res->is_paid}}</td>
                            <td>{{$res->event_fee}}</td>
                            <td>{{$res->image}}</td>
                            <td><a class="btn btn-info" href="/event/edit/{{$res->event_id}}">Edit</a></td>
                            <td><a class="btn btn-danger" href="/event/delete/{{$res->event_id}}">Delete</a></td>
                            <td><a class="btn btn-danger" href="/participant/view/{{$res->par_id}}">Participant</a></td>


                        </tr>

                    @endforeach


                </table>
            </div>



@endsection
