@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('CRUD de servicios') }}</div>

        <div class="card-body">
          @if (isset($service))
            <form action="{{ route('services.update', $service->id) }}" method="POST">
            @method('PUT')
          @else
            <form method="POST" action="{{ url('services') }}">
          @endif
              @csrf
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                  <input id="name" value="{{ isset($service) ? $service->name : '' }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User Id') }}</label>
                <div class="col-md-6">
                  <input id="user_id" value="{{ isset($service) ? $service->user_id : '' }}" type="number" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required>
                  @error('user_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                  <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                  <div class="col-md-6">
                    <input id="status" value="{{ isset($service) ? $service->status : '' }}" type="number" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required>
                    @error('status')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
              </div>
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ isset($service) ? __('Update') : __('Register') }}
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
