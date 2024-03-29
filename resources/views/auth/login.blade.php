@extends('layouts.app')

@section('contents')
<div class="container">
    <div class="row justify-content-center" style="background:none">
        <div class="col-md-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row justify-content-center">
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="enter email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ _('Wrong password or Email') }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn">
                            {{ __('Login') }}
                        </button><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
