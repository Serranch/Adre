<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/template_login.css" />
    <title>ADRE</title>
</head>

<body>
    <div class="text-center mt-5">
        <img class="text-center" src="img/logo.png" alt="logo" width="370" height="200" style="vertical-align:middle">
    </div>

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header text-center">
                    <h3>INICIAR SESION</h3>
                    <div class="d-flex justify-content-end social_icon">
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('login.post') }}" method="post">
                        @csrf
                        @if (session('error'))
                        <h4>{{ session('error') }}</h4>
                        @endif

                        <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right"><span class="input-group-text" style="height: 40px; background-color: #9557AC;"><i class="fas fa-user"></i></span></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right"> <span class="input-group-text" style="height: 40px; background-color: #9557AC;"><i class="fas fa-key"></i></span></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-group text-center mt-5">
                            <input type="submit" value="Login" class="btn float-right login_btn" style="background-color: #9557AC;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>