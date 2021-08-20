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
    <a class="btn btn-primary" href="{{ route('hospitals.create') }}"> Create New Hospital</a>
  </div> 
  <div class="card-body">
  
     <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Show</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($hospitals as $hospital)
        <tr>
            <td>{{$hospital->id}}</td>
            <td>{{ $hospital->name }}</td>
            <td><a class="btn btn-primary" href="{{ route('hospitals.show',$hospital->id) }}">Show</a></td>
            <td><a class="btn btn-primary" href="{{ route('hospitals.edit',$hospital->id)}}" >Edit</a></td>
            <td>
              <form action="{{ route('hospitals.destroy', $hospital->id)}}" method="post">
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