<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('') }}/library/stisla/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ url('') }}/library/stisla/node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('') }}/library/stisla/assets/css/style.css">
  <link rel="stylesheet" href="{{ url('') }}/library/stisla/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../assets/img/stisla-fill.svg" alt="logo" width="100"
                class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>

              <div class="card-body">
                <form method="post">
                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="no_ponsel">Nomer Ponsel</label>
                      <input id="no_ponsel" type="text" class="form-control" name="no_ponsel" autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="nama">Nama Lengkap</label>
                      <input id="nama" type="text" class="form-control" name="nama">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="password">Password</label>
                      <input id="password" type="text" class="form-control" name="password" autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="password2">Konfrimasi Password</label>
                      <input id="password2" type="text" class="form-control" name="password2">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Sudah punya akun? <a href="/login">Login!</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="{{ url('') }}/library/stisla/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{ url('') }}/library/stisla/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="{{ url('') }}/library/stisla/node_modules/moment/min/moment.min.js"></script>
  <script src="{{ url('') }}/library/stisla/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="{{ url('') }}/library/stisla/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="{{ url('') }}/library/stisla/node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="{{ url('') }}/library/stisla/assets/js/scripts.js"></script>
  <script src="{{ url('') }}/library/stisla/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="{{ url('') }}/library/stisla/assets/js/page/auth-register.js"></script>
</body>

</html>