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

<body class="bg-white">

  <!--start wrapper-->
  <div class="wrapper">
    <div class="">
      <div class="row g-0 m-0">
        <div class="col-xl-6 col-lg-12">
          <div class="login-cover-wrapper">
            <div class="card shadow-none">
              <div class="card-body p-4">
                <div class="text-center">
                  <h4>Reset password</h4>
                  <p>You will receive an e-mail in maximum 60 seconds</p>
                </div>
                <form class="form-body row g-3">
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="abc@example.com">
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <button type="button" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="position-fixed top-0 h-100 d-xl-block d-none login-cover-img au-reset-password-cover">
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
  </div>
  <!--end wrapper-->


</body>

</html>
