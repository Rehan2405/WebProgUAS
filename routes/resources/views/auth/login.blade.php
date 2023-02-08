@extends('layouts.template')

@section('container')
<body>
    <div class="container">
    <div class="row justify-content-start">
        <div class="col-md-6">
            <div class="mb-3">
                <div class="header text-start h1"><u>Sign In</u></div>
                <div class="body"><br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-4">
                        <label for="name" class="col col-form-label text-md-start">{{ __('Email Address :') }}</label>
                            <div class="col-md-9 offset-md-0">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Access">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                        <label for="name" class="col col-form-label text-md-start">{{ __('Password :') }}</label>
                            <div class="col-md-9 offset-md-0">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ 5-20 }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="d-grid gap-5">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Login') }}
                                </button>
                                
                            </div>
                            <a class="btn btn-link" href="{{ route('register') }}">{{ __('Dont have an account? click here to register ') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection
