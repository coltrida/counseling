@extends('layouts.template2')
@section('titolo')
    Login
@stop

@section('content')
    <div class="container" style="padding: 40px 0">
        <div class="row justify-content-center">
            <div class="vc_col-md-10 vc_col-lg-10">
                <div class="card">
                    {{--<div class="card-header" style="font-size: 30px">--}}{{--{{ __('Login') }}--}}{{--</div>--}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row" style="margin: 0">
                                <label for="email" class="vc_col-sm-4 vc_col-form-label text-md-right" style="font-size: 30px">{{ __('E-Mail') }}</label>

                                <div class="vc_col-md-8">
                                    <input id="email" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="margin: 0">
                                <label for="password" class="vc_col-md-4 vc_col-form-label text-md-right" style="font-size: 30px">{{ __('Password') }}</label>

                                <div class="vc_col-md-8">
                                    <input id="password" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="margin: 0;">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" style="background-color: #95b9e0">
                                        {{ __('Login') }}
                                    </button>
                                            <br>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
