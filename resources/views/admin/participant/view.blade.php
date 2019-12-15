@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a class="btn btn-success float-right" href="/participant/create">New</a><br>
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

                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>

                        <th>Edit</th>
                        <th>delete</th>


                    </tr>
                    </thead>

                    @foreach($result as $res)
                        <tr>
                            <td>{{$res->par_name}} </td>
                            <td>{{$res->par_email}} </td>
                            <td>{{$res->par_phone}} </td>
                            <td>{{$res->par_address}}</td>
                            <td><a class="btn btn-info" href="/participant/edit/{{$res->par_id}}">Edit</a></td>
                            <td><a class="btn btn-danger" href="/perticipant/delete/{{$res->par_id}}">Delete</a></td>


                        </tr>

                    @endforeach


                </table>
            </div>



@endsection
