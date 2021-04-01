@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

      @if (isset($success))
        <div class="alert alert-success">
          <p>{{ $success }}</p>
        </div>
      @endif

      <div class="card">
        <div class="card-header">{{ __('Manage Users') }}</div>

        <div class="card-body">
          <a href="/users" class="btn btn-outline-secondary mr-3" role="button" aria-disabled="true">See All</a>
          <a href="/users/create" class="btn btn-outline-secondary mr-3" role="button" aria-disabled="true">Create New</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
