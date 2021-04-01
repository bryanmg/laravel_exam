@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Admin Users') }}</div>

        <div class="card-body">
          @if (isset($user))
            <form action="{{ route('users.update', $user->id) }}" method="POST">
            @method('PUT')
          @else
            <form method="POST" action="{{ url('users') }}">
          @endif
              @csrf
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                  <input id="name" value="{{ isset($user) ? $user->name : '' }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                <div class="col-md-6">
                  <input id="email" value="{{ isset($user) ? $user->email : '' }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                <div class="col-md-6">
                  <input id="gender" value="{{ isset($user) ? $user->gender : '' }}" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required>
                  @error('gender')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
                <div class="col-md-6">
                  <input id="age" value="{{ isset($user) ? $user->age : '' }}" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required>
                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                <div class="col-md-6">
                  <input id="role_id" value="{{ isset($user) ? $user->role_id : '' }}" type="number" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required>
                  @error('role_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              @if (isset($user))
                <div class="form-group row">
                  <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                  <div class="col-md-6">
                    <input id="status" value="{{ isset($user) ? $user->status : '' }}" type="number" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required>
                    @error('status')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              @else
                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                  <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>
              @endif

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ isset($user) ? __('Update') : __('Register') }}
                  </button>
                </div>
              </div>
            </form>
            <br/>
          <br/>
          <a href="/home" class="btn btn-outline-secondary mr-3" role="button" aria-disabled="true">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
