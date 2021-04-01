@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Index of Users') }}</div>

        <div class="card-body">
          @if (count($users) == 0)
            Woops! it seems like there is no users yet!
          @else
            <ul class="list-group">
              @foreach ($users as $user)
                <li class="list-group-item">
                  <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    ID: {{$user->id}} <br/>
                    Name: {{$user->name}} || Email: {{$user->email}} <br/>
                    Age: {{$user->age}} || Gender: {{$user->gender}} <br/>
                    Rol: {{$user->role->rol}} <br/>
                    Status: {{$user->status ? 'Active' : 'Inactive'}} <br/><br/>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-info mr-3" role="button" aria-disabled="true">
                      Update
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger mr-3">
                      Delete
                    </button>
                  </form>
                  <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <input id="status" value="0" type="hidden" name="status" />
                    <div class="form-group row mb-0">
                      <button type="submit" class="btn btn-warning">
                        {{ __('Unactive User') }}
                      </button>
                    </div>
                  </form>
                </li>
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
