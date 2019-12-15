@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="card">

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

                    <th>Event Id</th>
                    <th>Participant Id</th>
                    <th> Payment system</th>
                    <th>Paticipant</th>




                </tr>
                </thead>

                @foreach($result as $res)
                    <tr>
                        <td>{{$res->event_id}} </td>
                        <td>{{$res->par_id}} </td>




                    </tr>

                @endforeach


            </table>
        </div>



@endsection
