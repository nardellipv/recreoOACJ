<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>Fobia - Bootstrap5 Admin Template</title>
</head>

<body>

    <div class="login-bg-overlay au-sign-up-basic"></div>

    <!--start wrapper-->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7 mx-auto mt-5">
                    <div class="card radius-10">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4>Registrar Colegio</h4>
                            </div>
                            <form class="form-body row g-3" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="inputName" class="form-label">Nombre del Colegio</label>
                                    <input id="name_school" type="text" class="form-control @error('name_school') is-invalid @enderror" name="name_school" value="{{ old('name_school') }}" required autocomplete="name_school" autofocus>
                                    @error('name_school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">Email del Colegio</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Provicia</label>
                                    <select class="form-select" id="small-bootstrap-class-single-field" name="province_id" required>
                                        <option>Seleccione una provincia</option>
                                        <option disabled>-----------------</option>
                                        @foreach($provinces as $province)
                                        <option value="{{ $province->id }}">
                                            {{ $province->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="inputPassword" class="form-label">Contraseña</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword" class="form-label">Confirmar Contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 text-center">
                                    <p class="mb-0">Ya estoy registrado <a href="{{ route('login') }}">Ingresar</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="my-5">
            <div class="container">
                <div class="d-flex align-items-center gap-4 fs-5 justify-content-center social-login-footer">
                    <a href="javascript:;">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="javascript:;">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                    <a href="javascript:;">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                    <a href="javascript:;">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="javascript:;">
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </a>
                </div>
                <div class="text-center">
                    <p class="my-4">Copyright © 2021 UI Admin by Codervent.</p>
                </div>
            </div>
        </footer>
    </div>
    <!--end wrapper-->

</body>

</html>
