<link rel="stylesheet" href="/css/bootstrap.css">
<style>
    .ticket-container {
        background-color: #ECEDEF;
        border: 1px solid #ECEDEF;
    }

    .ticket {
        background: #E84C3D;
        color: #ffffff;
        padding: 10px;
    }

    p {
        margin-top: 0;
        margin-bottom: 8px;
        line-height: 21px;
    }

    .h5, h5 {
        font-size: 1.25rem;
        line-height: 5px !important;
        color: #ffffff;
    }

    .white-bg {
        background: #ffffff;
    }

    ul {
        list-style-type: none;
    }

    td {
        padding: 10px;
    }

    .footer {
        padding: 10px;
    }
</style>


<div class="container">
    <div class="col-md-8 ticket-container">
        <div class="row ticket">
            <table>
               {{-- <td>
                    <div class="col-md-12">
                        <img src="{{asset('image/logo.png')}}" height="70px">
                    </div>
                </td>--}}
                <td>
                    <div class="col-md-12">
                        <h5> {{$result->event_title}}</h5>
                    </div>
                </td>
            </table>


        </div>
        <div class="row">
            <table>
                <tr>
                    <td>
                        <div class="col-md-12">

                            <img src="data:image/png;base64,
                                {{
                                base64_encode(QrCode::format('png')
                                    ->size(180)
                                    ->generate($qr_code))
                             }} ">


                            {{-- {!!
                                    QrCode::size(180)
                                    ->encoding('UTF-8')
                                    ->generate('Hello')
                                !!}--}}
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <p><strong>Venue: {{$result->event_venue}}</strong></p>
                            <p>Address: Dhanmondi-32, Sobhanbag, Dhaka</p>
                            <p> Date: {{$result->event_date}}</p>
                            {{--  <p>Time: 10.0 AM</p>--}}

                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <p><strong>Name: {{$participant['par_name']}}</strong></p>
                            <p>Address: {{$participant['par_address']}}<br>
                                Phone: {{$participant['par_phone']}}<br>
                                Reg Id: {{$qr_code}}<br>
                                Gate: 15</p>

                        </div>
                    </td>
                </tr>
            </table>


        </div>
        <div class="row white-bg">
            <div class="col-md-10">
                <br>
                <h6>Instruction</h6>
                <ol>
                    <li>Dont bring food here</li>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque
                    </li>
                    <li>D Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</li>
                    <li>Sed consequat, leo eget bibendum sodales, augue velit cursus nunc</li>
                    <li> Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</li>
                    <li> Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                        eleifend ac, feugiat a, tellus.
                    </li>
                </ol>
            </div>
        </div>

        <div class="row footer">
            <div class="col-md-10">
                Powered By: <a href="https://www.pixonlab.com">PixonLab</a>
            </div>
        </div>
    </div>
</div>

