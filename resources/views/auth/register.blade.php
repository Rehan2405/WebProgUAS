@extends('layouts.template')

@section('container')
<body>
<div class="container">
    <div class="row justify-content-start">
        <div class="col-md-8">
            <div class="body">
                <div class=" text-start h1"><u>{{ __('Register') }}</u></div>

                <div class="body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col col-form-label text-md-start">{{ __('First Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{isset ($user->name)}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="lastname" class="col col-form-label text-md-start">{{ __('Last Name') }}</label>

                            <div class="col-md-4">
                                <input id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col col-form-label text-md-start">{{ __('Email :') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="name" class="col col-form-label text-md-start">{{ __('Role : ') }}</label>
                        <div class="col-md-4">
                        <div class="form-check form-check-inline">
                            <input class="role" type="radio" name="role" id="role" value="member">
                            <label class="form-check-label" for="role">Member</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="role" type="radio" name="role" id="role" value="admin">
                            <label class="form-check-label" for="role">Admin</label>
                            </div>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            </div>
                        </div>
                                               
                        <div class="col mb-3"> 
                            <label for="name" class="col col-form-label text-md-start">{{ __('Gender : ') }}</label>
                        <div class="col-md-4">
                        <div class="form-check form-check-inline">
                            <input class="gender" type="radio" name="gender" id="gender" value="male">
                            <label class="form-check-label" for="gender">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="gender" type="radio" name="gender" id="gender" value="female">
                            <label class="form-check-label" for="gender">Female</label>
                            </div>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class=" col col-form-label text-md-start">{{ __('Password :') }}</label>
                            
                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <label for="password-confirm" class="col col-form-label text-md-end">{{ __('Confirm Password :') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-lg">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                            <a class="btn btn-link" href="{{ route('login') }}">{{ __('Already have an account? click here to login ') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
