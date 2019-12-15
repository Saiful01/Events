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
</head>
<body>

<div class="container">

    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">

                @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif

                @if(Session::has('failed'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
                @endif


                <form action="/admin/login/check" method="post">
                    <div class="form-group row">
                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" required
                                   autofocus>
                            <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                        <div class="col-md-6">
                            <input type="password" id="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                         <div class="col-md-6 offset-md-4">
                             <div class="checkbox">
                                 <label>
                                     <input type="checkbox" name="remember"> Remember Me
                                 </label>
                             </div>
                         </div>
                     </div>--}}

                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                        <a href="#" class="btn btn-link">
                            Forgot Your Password?
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

</body>
</html>
