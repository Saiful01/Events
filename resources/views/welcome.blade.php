@extends('layouts.common')
@section('content')

    <div class="">
        <div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="/image/1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Popular Event</h1>
                        <p>This concert for Rag day</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/image/2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Popular Event</h1>
                        <p>Joy Bangla Concert</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/image/3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Popular Event</h1>
                        <p>Concert for Openning Ceremony</p>
                    </div>
                </div>


            </div>

        </div>

        <div class="container mt-5 text-center">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-success"> Popular Events in Dhaka</h1>
                </div>
            </div>
        </div>
        <section id="events">
            <div class="container mt-5" >
                <div class="row">

                    @foreach($result as $res)
                        <div class="col-md-4">
                            <div class="card">
                                <a href="/pages/details/{{$res->event_id}}"><img class="card-img-top"
                                                                                 src="/eventimg/{{$res->image}}"
                                                                                 alt="Event image"
                                                                                 width="100%"
                                                                                 height="300px"></a>
                                <div class="card-body">
                                    <a class="btn btn-info"
                                       href="/pages/details/{{$res->event_id}}">{{$res->event_title}}</a><br>
                                    <h5>{{$res->event_date}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



        </section>

    </div>




    @endsection

