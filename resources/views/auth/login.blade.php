
@extends('layouts.app02')

@section('content')

    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6">    
              <div class="form d-flex align-items-center">
                <div class="content">

                  @if(Session::has('danger'))

                      <div class="alert alert-danger" role="alert">
                          <strong><i class="fas fa-exclamation-circle"></i> </strong>{{Session::get('danger')}}
                      </div>

                  @endif

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="input-material @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                  
                            <div class="col-md-12">
                                <input id="password" type="password" class="input-material @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" id="bt-login">
                                    {{ __('Login') }}
                                </button><br />

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="padding-left: 0;color: #DB6574;">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin" class="external">Bootstrapious</a></p>
      
      </div>
    </div>


    <!-- JavaScript files-->
    <script src="{{ asset('assets/darkadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/darkadmin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('assets/darkadmin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/darkadmin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('assets/darkadmin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/darkadmin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>

@endsection
