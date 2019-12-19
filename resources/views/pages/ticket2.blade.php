<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ticket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1 class="text-danger"> Event Ticket</h1>
</div>
<div class="container">
    <div class="table table-bordered">
        <div class="row">
            <div class="col-md-9">
                <h1>{{$result->event_title}}</h1>

            </div>
            <div class="col-md-3">
                <img  src="/eventimg/{{$result->image}}" alt="Event image"
                     width="100%" height="100px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <p>{{$result->event_venue}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <p>{{$result->event_date}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
             <p>{{$participant['par_name'] }}</p>
                <p>{{$participant['par_phone']}}</p>
                <p>{{$participant['par_address']}}</p>
{{--

<br>
<br>
<br>

<div class="ticket">
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card rounded-0">

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Event Name</h4>

                            <hr>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            Venue: daffodil International University
                        </div>

                        <div class="col-md-5">
                            WEDNESDAY 28 DECEMBER 2014<br>
                            08:55PM TO 12:00 AM
                        </div>
                    </div>

                    <div class="row">

                    </div>


                </div>
--}}

            </div>
        </div>

    </div>
</div>




</body>
</html>
