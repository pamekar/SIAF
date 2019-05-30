@extends('layouts.auth')
@section('title','Login')

@section('title','Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-4">
            <div class="block block-themed block-fx-shadow mb-0">
                <div class="block-header">
                    <h3 class="block-title">Sign In</h3>
                    <div class="block-options">
                        @if(Route::has('password.request'))
                            <a class="btn-block-option font-size-sm" href="{{route('password.request')}}">Forgot
                                Password?</a>
                        @endif
                        <a class="btn-block-option" href="{{route('register')}}" data-toggle="tooltip"
                           data-placement="left" title="New Account">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="block-content">
                    <div class="p-sm-3 px-lg-4 py-lg-5">
                        <div class="text-center">
                            <p class="mb-2">
                                <img src="{{$public}}/png/favicon-32x32.png" alt=""> <span class="font-w700 font-size-h3"> SIAF</span> <span class="font-w400">NG</span>
                            </p>
                        </div>
                        <p>Welcome, please login.</p>
                        <form class="js-validation-signin" action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="py-3">
                                <div class="form-group">
                                    <input type="email"
                                           class="form-control form-control-alt form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus
                                           placeholder="{{ __('E-Mail Address') }}">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                           class="form-control form-control-alt form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required placeholder="{{ __('Password') }}">
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback" role="alert">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }} >
                                        <label class="custom-control-label font-w400"
                                               for="login-remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-xl-5">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{$public}}/js/op_auth_signin.min.js"></script>
@endsection