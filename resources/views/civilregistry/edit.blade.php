@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Civil Registry
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
      <form method="post" action="{{ route('civilregistry.update', $civilregistry->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $civilregistry->name }}"/>
          </div>
          <div class="form-group">
              <label for="phone">phone:</label>
              <input type="text" id="phone" class="form-control" name ="phone" value="{{ $civilregistry->phone}}"/>
          </div>
          <div class="form-group">
              <label for="city_name">City:</label>
              <input type="text" name="city_name" id="city_name" class="form-control" value="{{ DB::table('cities')->where('id',$civilregistry->id)->value('name') }}"/>
          </div>
          <div class="form-group">
              <label for="address">address:</label>
              <input type="text" name="address" id="address" class="form-control" value="{{ $civilregistry->address }}"/>
          </div>
          <div class="form-group">
            <label for="map">map:</label>
            <input type="text" id="map" name="map" class="form-control" value="{{ $civilregistry->map }}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection