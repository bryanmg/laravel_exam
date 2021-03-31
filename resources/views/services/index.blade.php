@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('CRUD de servicios') }}</div>

        <div class="card-body">
          @if (count($services) == 0)
            Woops! it seems like there is no services yet!
          @else
            <ul class="list-group">
              @foreach ($services as $service)
                <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                  <li class="list-group-item">
                    ID: {{$service->id}} <br/>
                    Name: {{$service->name}} <br/>
                    Status: {{$service->status}} <br/>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-outline-info mr-3" role="button" aria-disabled="true">
                      Update
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger mr-3">
                      Delete
                    </button>
                    
                  </li>
                </form>
              @endforeach
            </ul>
          @endif
          <br/>
          <br/>
          <a href="/home" class="btn btn-outline-secondary mr-3" role="button" aria-disabled="true">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
