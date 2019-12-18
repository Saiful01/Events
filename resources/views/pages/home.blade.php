@extends('layouts.common')
@section('content')

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/image/1.jpg" alt="First slide" height="400px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/image/2.jpg" alt="First slide" height="400px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/image/3.jpg" alt="First slide" height="400px">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold"> Popular Events in Dhaka</h1>
            </div>
        </div>
    </div>
    <section id="events">
        <div class="container mt-5">
            <div class="row">

                @foreach($result as $res)
                    <div class="col-md-4">
                        <div class="card">

                            <div class="card-body">
                                <a href="/pages/details/{{$res->event_id}}">
                                    <img class="card-img-top" src="/eventimg/{{$res->image}}" alt="Event image"
                                         width="100%" height="250px">
                                </a>
                                <hr>
                                <p style="color: #DF7A54; font-weight: bold">{{$res->event_date}}</p>
                                <p class="headline">
                                    <a  href="/pages/details/{{$res->event_id}}">{{$res->event_title}}</a>
                                </p>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </section>

@endsection

