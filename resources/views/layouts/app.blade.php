<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        .custom-container{
            padding-bottom: 35px;
        }

        .card{
            margin-top: 25px;
            border-radius: 0px;
        }
        .custom-header{
            padding: 10px;
        }

    </style>

    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">

    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/home">Admin Home</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Admin
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/admin/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>


<div class="container custom-container">

    @yield('content')


</div>

<div class="footer-area footer-bottom">
    Developed By:
</div>

</body>
</html>

