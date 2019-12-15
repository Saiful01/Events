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

                <form method="post" action="/event/store" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" name="event_title">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                    </div>


                    <div class="form-group">
                        <label>Details:</label>
                        <textarea type="text" class="form-control" name="event_details"> </textarea>
                    </div>

                    <div class="form-group">
                        <label>Date:</label>
                        <input type="text" class="form-control" name="event_date">
                    </div>
                    <div class=" form-group">
                        <label>Venue:</label>
                        <input type="text" class="form-control" name="event_venue">
                    </div>
                    <div class=" form-group">
                        <label>Payment :</label>
                        <select class="form-control form-control-lg" name="is_paid">
                            <option value="1">Paid</option>
                            <option value="0">Free</option>


                        </select>
                    </div>
                    <div class="form-group">
                        <label>Fee:</label>
                        <input type="text" class="form-control" name="event_fee">
                    </div>
                    <div class="form-group">
                        <label>Event image:</label>
                        <input type="file" class="form-control" name="image">
                    </div>


                    <button type=" submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>


@endsection
