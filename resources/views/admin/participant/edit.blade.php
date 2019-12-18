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

                <form method="post" action="/participant/update" enctype='multipart/form-data'>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Name:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="par_name" value="{{$result->par_name}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="par_id" value="{{$result->par_id}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Email:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="par_email" value=" {{$result->par_email}} ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Phone:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="par_phone"
                                   value=" {{$result->par_phone}} ">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>Address:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="par_address"
                                   value=" {{$result->par_address}} ">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>


@endsection
