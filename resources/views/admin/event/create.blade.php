@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">


                @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif

                @if(Session::has('failed'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
                @endif

                <form method="post" action="/event/store" enctype='multipart/form-data'>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Title:</label>
                        </div>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="event_title" required>
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                        </div>


                    </div>


                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Details:</label>
                        </div>

                        <div class="col-md-9">
                            <textarea type="text" class="form-control" id="editor" name="event_details" required
                                      rows="10"> </textarea>
                        </div>


                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Date:</label>
                        </div>

                        <div class="col-md-9">
                            <input type="datetime-local" class="form-control" name="event_date" required>
                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Venue:</label>
                        </div>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="event_venue">
                        </div>


                    </div>
                    <div class=" form-group row">
                        <div class="col-md-3">
                            <label>Payment :</label>
                        </div>

                        <div class="col-md-9">
                            <select class="form-control form-control" name="is_paid">
                                <option value="1">Paid</option>
                                <option value="0">Free</option>


                            </select>
                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Fee:</label>
                        </div>

                        <div class="col-md-9">
                            <input type="number" class="form-control" name="event_fee">
                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Event image:</label>
                        </div>

                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image">
                        </div>

                    </div>

                    <button type=" submit" class="btn btn-primary">Save</button>
                </form>


            </div>
        </div>
    </div>



    <script>
        CKEDITOR.replace( 'event_details' );
    </script>
@endsection
