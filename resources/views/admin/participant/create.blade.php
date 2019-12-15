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

                <form method="post" action="/participant/store" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="par_name">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="par_email">
                    </div>
                    <div class=" form-group">
                        <label>Phone:</label>
                        <input type="text" class="form-control" name="par_phone">
                    </div>


                    <div class="form-group">
                        <label>Address:</label>
                        <textarea type="text" class="form-control" name="par_address"> </textarea>
                    </div>


                    <button type=" submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>


@endsection
