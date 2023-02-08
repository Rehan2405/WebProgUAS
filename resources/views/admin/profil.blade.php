@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <div class="body gap-2">
            <div class="h1 text-center mb-3"> My Profile</div>
        <img src="https://cdn.oneesports.id/cdn-data/sites/2/2022/03/Naruto-Uzumaki.jpg" class="col-4" alt="profile"><br>
        <form method="POST" action="{{ route('auth.update') }}">
                        @method("put")
                        @csrf
            <div class="row mb-3">
                            <label for="name" class="col col-form-label text-md-start">{{ __('First Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{auth()->user()->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="lastname" class="col col-form-label text-md-start">{{ __('Last Name') }}</label>

                            <div class="col-md-4">
                                <input id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{auth()->user()->lastname}}" required autocomplete="name" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col col-form-label text-md-start">{{ __('Email :') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}" required autocomplete="email" disabled>
                            </div>
                            <label for="name" class="col col-form-label text-md-start">{{ __('Role : ') }}</label>
                            <div class="col-md-4">
                                <input id="role" type="role" class="form-control @error('role') is-invalid @enderror" name="role" value="{{auth()->user()->role}}" required autocomplete="role" disabled>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col col-form-label text-md-start">{{ __('Gender :') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->gender}}" required autocomplete="email" disabled>

                            </div>
                            <label for="name" class="col col-form-label text-md-start">{{ __('Display Picture : ') }}</label>
                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" disabled>

                            </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class=" col col-form-label text-md-start">{{ __('New Password :') }}</label>
                            
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
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-lg" href="/home">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
            </div>
   </div>
    </div>
</div>
@endsection