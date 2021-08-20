@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
<div class="card-header">
  <a class="btn btn-primary" href="{{ route('postoffices.index') }}"> Back</a>    
  </div>
  <div class="card-header">
    Create new Post Office
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
      <form method="post" action="{{ route('postoffices.store') }}">
        @csrf
          <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" name="name" id="name" />
          </div>
          <div class="form-group">
              <label for="code">Code:</label>
              <input type="code" name="code" id="code" class="form-control"/>
          </div>
          <div class="form-group">
              <label for="city_name">City:</label>
              <input type="text" name="city_name" id="city_name" class="form-control" />
          </div>
          <div class="form-group">
              <label for="address">address:</label>
              <input type="text" name="address" id="address" class="form-control" />
          </div>
          <div class="form-group">
            <label for="map">map:</label>
            <input type="text" id="map" name="map" class="form-control" />
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
