@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
<div class="card-header">
  <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>    
  </div>
  <div class="card-header">
    Create new Hospital
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
      <form method="post" action="{{ route('hospitals.store') }}">
        @csrf
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" id="name" />
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" name="phone" id="phone" class="form-control"/>
          </div>
          <div class="form-group">
              <label for="special">Special:</label>
              <input type="text" name="special" id="special" class="form-control" />
          </div>
         
          <div class="form-group">
              <label for="city_name">City:</label>
              <input type="text" name="city_name" id="city_name" class="form-control" />
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" name="address" id="address" class="form-control" />
          </div>
          <div class="form-group">
            <label for="map">Map:</label>
            <input type="text" id="map" name="map" class="form-control" />
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
