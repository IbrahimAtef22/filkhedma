@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Post Office
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
      <form method="post" action="{{ route('postoffices.update', $postoffice->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $postoffice->name }}"/>
          </div>
          <div class="form-group">
              <label for="code">Code:</label>
              <input type="code" name="code" id="code" class="form-control" value="{{ $postoffice->code }}"/>
          </div>
          <div class="form-group">
              <label for="city_name">City:</label>
              <input type="text" name="city_name" id="city_name" class="form-control" value="{{ DB::table('cities')->where('id',$postoffice->id)->value('name') }}"/>
          </div>
          <div class="form-group">
              <label for="address">address:</label>
              <input type="text" name="address" id="address" class="form-control" value="{{ $postoffice->address }}"/>
          </div>
          <div class="form-group">
            <label for="map">map:</label>
            <input type="text" id="map" name="map" class="form-control" value="{{ $postoffice->map }}"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection