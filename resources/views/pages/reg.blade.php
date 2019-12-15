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
        .banner {
            position: relative;
            background: url("/image/bg1.jpg");
            min-height: 100vh;
            background-size: cover;
            background-position: center;


        }

        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }


    </style>
</head>
<body>
<header>
    <section class="banner">

        <nav class="navbar navbar-expand-md ">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">

                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ">
                        <a href="/" class="nav-item nav-link active text-white">Home</a>
                        <a href="/" class="nav-item nav-link text-white">Event</a>
                        <a href="/" class="nav-item nav-link text-white">Gellary</a>

                    </div>

                </div>

            </div>
        </nav>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from enjoying your Events!</p>

                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">Viewer</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading text-success">Registration Form</h3>

                            <form method="post" action="/participant/store" enctype='multipart/form-data'>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input type="text" class="form-control"style="border-radius: 15px" placeholder="Name" name="par_name">
                                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                        </div>

                                        <div class="form-group">

                                            <input type="email" class="form-control"style="border-radius: 15px" placeholder="Email" name="par_email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" form-group">

                                            <input type="phone" class="form-control " style="border-radius: 15px" placeholder="Phone" name="par_phone">
                                        </div>


                                        <div class="form-group">
                                            <textarea  placeholder="Address" type="text" style="border-radius: 15px" class="form-control" name="par_address"> </textarea>
                                        </div>
                                        <button type=" submit" class="btn btn-primary">Registration</button>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

        </div>
    </section>
</header>


</body>
</html>
