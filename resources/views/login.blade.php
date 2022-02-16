<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 9 CRUD With Auth </title>

    <!-- Bootstrap -->
    <link href="{{asset('style/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('style/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('style/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('style/animate.css/animate.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style/sweetalert2/sweetalert2.css') }}">
    <script src="{{ asset('style/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Custom Theme Style -->
    <link href="{{asset('style/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" accept="{{ route('loginStore') }}">
              @csrf
              <h1>Login Form</h1>
              @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif
              <div>
                <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
              </div>

              <div>
                <input type="checkbox" class="js-switch" checked-data-switchery="true" name="remember" id="remember">
                <label for="remember">Remember password</label>
              </div>
              
              <div>
                <button type="submit" class="btn btn-primary">Login</button>
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script>
      @if (session()->has('success'))
        Swal.fire({
          icon: 'success',
          title: "{{ session('success') }}"
        })
      @endif
    </script>
  </body>
</html>
