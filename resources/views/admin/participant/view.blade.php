@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Participants</h4>
            </div>

            <div class="card-body">


                @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif

                @if(Session::has('failed'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
                @endif
                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Is Inside</th>

                        <th>Edit</th>
                        <th>delete</th>


                    </tr>
                    </thead>

                    @php($i=1)
                    @foreach($result as $res)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$res->par_name}} </td>
                            <td>{{$res->par_email}} </td>
                            <td>{{$res->par_phone}} </td>
                            <td>{{$res->par_address}}</td>
                            <td>@if($res->is_inside) Yes @else No @endif</td>
                            <td><a class="btn btn-info" href="/participant/edit/{{$res->par_id}}">Edit</a></td>
                            <td><a class="btn btn-danger" href="/perticipant/is-inside/{{$res->par_id}}">Inside</a></td>


                        </tr>

                    @endforeach


                </table>
            </div>



@endsection
