@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit City
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
      <form method="post" action="{{ route('cities.update', $city->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
              <label for="name">name:</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $city->name }}"/>
          </div>
          
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection