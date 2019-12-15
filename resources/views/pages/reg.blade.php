@extends('layouts.common')
@section('content')
    <div class="container register">
        <div class="row">

            <div class="card mx-auto">

                <div class="card-body">

                    @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                    @endif

                    @if(Session::has('failed'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
                    @endif


                    <form method="post" action="/participant/store" enctype='multipart/form-data'>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <input type="text" class="form-control" style="border-radius: 15px"
                                           placeholder="Name" name="par_name">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                    <input type="hidden" name="event_id" value="{{$id}}"/>
                                </div>

                                <div class="form-group">

                                    <input type="email" class="form-control" style="border-radius: 15px"
                                           placeholder="Email" name="par_email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class=" form-group">

                                    <input type="phone" class="form-control " style="border-radius: 15px"
                                           placeholder="Phone" name="par_phone">
                                </div>


                                <div class="form-group">
                                        <textarea placeholder="Address" type="text" style="border-radius: 15px"
                                                  class="form-control" name="par_address"> </textarea>
                                </div>
                                <button type=" submit" class="btn btn-primary">Registration</button>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection