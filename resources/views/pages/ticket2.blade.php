<!DOCTYPE html>
<html lang="en">
<head>
   {{-- <title>Ticket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>--}}
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1 class="text-danger"> Event Ticket</h1>
</div>
<div class="container">
    <div class="table table-bordered">
        <h1><b>Event:</b>{{$result->event_title}}</h1>
        <table>
            <tr>
                <td>

                    <p><b>Venue:</b>{{$result->event_venue}}</p>
                    <p><b>Date:</b>{{$result->event_date}}</p>
                </td>
                <td>
                    <p><b>Name:</b>{{$participant['par_name'] }}</p>
                    <p><b>Phone:</b>{{$participant['par_phone']}}</p>
                    <p><b>Address:</b>{{$participant['par_address']}}</p>
                </td>
                <td>

                    {{--                    <img src="/eventimg/{{$result->image}}" />--}}

                   {{-- <img src="asset('/eventimg/{{$result->image}}')" alt="Logo" height="75px">--}}

                    {!! QrCode::size(300)->generate($qr_code); !!}
                </td>
            </tr>
        </table>

    </div>
</div>

</body>
</html>
