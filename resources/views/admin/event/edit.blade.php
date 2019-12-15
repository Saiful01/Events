@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif

                @if(Session::has('failed'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
                @endif

                <form method="post" action="/event/update" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label>Event Title:</label>
                        <input type="text" class="form-control" name="event_title" value="{{$result->event_title}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="event_id" value="{{$result->event_id}}">
                    </div>


                    <div class="form-group">
                        <label>Event details:</label>
                        <textarea type="text" class="form-control"
                                  name="event_details"> {{$result->event_details}} </textarea>
                    </div>
                    <div class="form-group">
                        <label>Event Date:</label>
                        <input type="text" class="form-control" name="event_date" value=" {{$result->event_date}} ">
                    </div>
                    <div class="form-group">
                        <label>Event Vanue:</label>
                        <input type="text" class="form-control" name="event_venue" value=" {{$result->event_venue}} ">
                    </div>

                    <div class="form-group">
                        <label>Payment:</label>
                        <select class="form-control form-control-lg" name="is_paid">
                            <option @if($result->is_paid=="1") selected @endif value="1">Paid</option>
                            <option @if($result->is_paid=="0") selected @endif value="0">Free</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Event Fee:</label>
                        <input type="text" class="form-control" name="event_fee" value=" {{$result->event_fee}} ">
                    </div>
                    <div class="form-group">
                        <label>Event image:</label>
                        <input type="file" class="form-control" name="image" value=" {{$result->image}} ">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>


@endsection
