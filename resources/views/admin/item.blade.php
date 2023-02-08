@extends('layouts.app')

@section('content')
<<div class="card mt-3 mb-3 justify-content-center text-center w-50 m-auto">
    <div class="card-header bg-info">
        <h3 class="fw-normal text-white mt-2  text-align-center">{{auth()->user()->name}}</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="{{ route('auth.update') }}" method="POST">
            @method("put")
                @csrf
                <div class="mb-3">
                <h3 class="fw-normal text-black mt-2  d-flex d-inline">{{auth()->user()->name}}</h3>
                    <select id="role" name="role" class="role">
                    <option value="">Select Role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-lg" href="/home">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
            </form>
          </main>
    </div>
  </div>
@endsection
