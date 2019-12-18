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
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Title:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="event_title" value="{{$result->event_title}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="event_id" value="{{$result->event_id}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Details:</label>
                        </div>
                        <div class="col-md-9">
                        <textarea type="text" class="form-control"
                                  name="event_details"> {{$result->event_details}} </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Date:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="event_date" value=" {{$result->event_date}} ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Venue:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="event_venue"
                                   value=" {{$result->event_venue}} ">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Payment:</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control form-control-lg" name="is_paid">
                                <option @if($result->is_paid=="1") selected @endif value="1">Paid</option>
                                <option @if($result->is_paid=="0") selected @endif value="0">Free</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Fee:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="event_fee"
                                   value=" {{$result->event_fee}} ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Image:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image" value=" {{$result->image}} ">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>


@endsection
