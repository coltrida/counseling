@extends('layouts.template2')
@section('titolo')
    Registrazione
@stop

@section('content')
<div class="container" style="padding: 40px 0">
    <div class="row justify-content-center">
        <div class="vc_col-md-10 vc_col-lg-10">
            <div class="card">
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row" style="margin: 0">
                            <label for="name" class="vc_col-sm-4 vc_col-form-label text-md-right" style="font-size: 30px">{{ __('Nome') }}</label>

                            <div class="vc_col-md-8">
                                <input id="name" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="margin: 0">
                            <label for="surname" class="vc_col-sm-4 vc_col-form-label text-md-right" style="font-size: 30px">{{ __('Cognome') }}</label>

                            <div class="vc_col-md-8">
                                <input id="surname" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="margin: 0">
                            <label for="ditta" class="vc_col-sm-4 vc_col-form-label text-md-right" style="font-size: 30px">{{ __('Ditta') }}</label>

                            <div class="vc_col-md-8">
                                <input id="ditta" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px" type="text" class="form-control{{ $errors->has('ditta') ? ' is-invalid' : '' }}" name="ditta" value="{{ old('ditta') }}" required>

                                @if ($errors->has('ditta'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ditta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="margin: 0">
                            <label for="piva" class="vc_col-sm-4 vc_col-form-label text-md-right" style="font-size: 30px">{{ __('P. IVA') }}</label>

                            <div class="vc_col-md-8">
                                <input id="piva" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px" type="text" class="form-control{{ $errors->has('piva') ? ' is-invalid' : '' }}" name="piva" value="{{ old('piva') }}" required>

                                @if ($errors->has('piva'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('piva') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="margin: 0">
                            <label for="email" class="vc_col-sm-4 vc_col-form-label text-md-right" style="font-size: 30px">{{ __('E-Mail') }}</label>

                            <div class="vc_col-md-8">
                                <input id="email" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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

                        <div class="form-group row" style="margin: 0">
                            <label for="password-confirm" class="vc_col-md-4 vc_col-form-label text-md-right" style="font-size: 30px">{{ __('Conferma Password') }}</label>

                            <div class="vc_col-md-8">
                                <input id="password-confirm" style="border-color:darkgray; border-radius: 5px; color: black; font-size: 20px" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" style="background-color: #95b9e0">
                                    {{ __('Register') }}
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
