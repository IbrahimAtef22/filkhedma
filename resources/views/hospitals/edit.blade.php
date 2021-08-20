@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Hospital
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
      <form method="post" action="{{ route('hospitals.update', $hospital->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $hospital->name }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" name="phone" id="phone" class="form-control" value="{{ $hospital->phone }}"/>
          </div>
          <div class="form-group">
              <label for="special">Special:</label>
              <input type="text" name="special" id="special" class="form-control" value="{{ $hospital->special }}"/>
          </div>
          
          <div class="form-group">
              <label for="city_name">City:</label>
              <input type="text" name="city_name" id="city_name" class="form-control" value="{{ DB::table('cities')->where('id',$hospital->id)->value('name') }}"/>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" name="address" id="address" class="form-control" value="{{ $hospital->address }}"/>
          </div>
          <div class="form-group">
            <label for="map">Map:</label>
            <input type="text" id="map" name="map" class="form-control" value="{{ $hospital->map }}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection