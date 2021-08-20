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
      <form method="post" action="{{ route('pharmacies.update', $pharmacy->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $pharmacy->name }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" name="phone" id="phone" class="form-control" value="{{ $pharmacy->phone }}"/>
          </div>
          <div class="form-group">
              <label for="delivery">Delivery:</label>
              <input type="text" name="delivery" id="delivery" class="form-control" value="{{ $pharmacy->delivery }}"/>
          </div>
          <div class="form-group">
              <label for="city_name">City:</label>
              <input type="text" name="city_name" id="city_name" class="form-control" value="{{ DB::table('cities')->where('id',$pharmacy->id)->value('name') }}"/>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" id="address" class="form-control" name ="address" value="{{ $pharmacy->address }}"/>
          </div>
          <div class="form-group">
            <label for="map">Map:</label>
            <input type="text" id="map" name="map" class="form-control" value="{{ $pharmacy->map }}" />
        </div>
         
          
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection