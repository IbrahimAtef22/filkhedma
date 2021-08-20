@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
<div class="card-header">
  <a class="btn btn-primary" href="{{ route('cities.index') }}"> Back</a>    
  </div>
  <div class="card-header">
    Create new City
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cities.store') }}">
        @csrf
          <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" name="name" id="name" />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
