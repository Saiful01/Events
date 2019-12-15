<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .banner{
            position: relative;
            background: url("/image/bg1.jpg");
            min-height: 100vh;
            background-size: cover;
            background-position: center;


        }



    </style>
</head>
<body>
    <section class="banner">

        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Events</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gellary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="wide-tb-80 contact-full-shadow mt-5">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 style="color:green"><b style="color:black" >Event Title:</b>{{$result->event_title}}</h2>
                        <p><b>Event venue:</b> {{$result->event_venue}} </p>
                        <div class="card-body">

                            <p><b>Event Description:</b>
                            <ul class="unorder-list">
                                <li>{{$result->event_details}}</li>
                            </ul>
                            </p>
                            <p><b>Event Date: </b> {{$result->event_date}}</p>

                            <p><b> Payment System: </b> {{$result->is_paid}}</p>
                            <p><b>Event Fee: </b> {{$result->event_fee}}</p>
                            <a class="btn btn-info" href="/pages/reg/{{$result->event_id}}"> Registration </a>
                        </div>
                        <img class="" alt="Thumbnail [200x250]"
                             src="/eventimg/{{$result->image}}" style="width: 100%">
                    </div>

                </div>

            </div>

            </div>
            </div>

        </section>


        </div>
    </section>

<!-- Contact Details Start -->




</body>
</html>
