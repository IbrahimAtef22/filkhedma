@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

  <div class="card uper">
  <div class="card-header">
    <a class="btn btn-primary" href="{{ route('home') }}"> Back to Home</a>
  </div> 
  <div class="card-header">
    <a class="btn btn-primary" href="{{ route('cities.create') }}"> Create New City</a>
  </div> 
  <div class="card-body">
  
     <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td>{{ $city->name }}</td>
            
            <td><a class="btn btn-primary" href="{{ route('cities.edit',$city->id)}}" >Edit</a></td>
            <td>
              <form action="{{ route('cities.destroy', $city->id)}}" method="post">
                @csrf 
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
</div>
  
@endsection