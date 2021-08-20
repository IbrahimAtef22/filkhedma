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
    <a class="btn btn-primary" href="{{ route('pharmacies.create') }}"> Create New Pharmacy</a>
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
        @foreach($pharmacies as $pharmacy)
        <tr>
            <td>{{$pharmacy->id}}</td>
            <td>{{$pharmacy->name }}</td>
            <td><a class="btn btn-primary" href="{{ route('pharmacies.show',$pharmacy->id) }}">Show</a></td>
            <td><a class="btn btn-primary" href="{{ route('pharmacies.edit',$pharmacy->id)}}" >Edit</a></td>
            <td>
              <form action="{{ route('pharmacies.destroy', $pharmacy->id)}}" method="post">
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