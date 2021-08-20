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
    <a class="btn btn-primary" href="{{ route('civilregistry.create') }}"> Create New Civil Registry</a>
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
        @foreach($civilregistry as $cr)
        <tr>
            <td>{{$cr->id}}</td>
            <td>{{$cr->name }}</td>
            <td><a class="btn btn-primary" href="{{ route('civilregistry.show',$cr->id) }}">Show</a></td>
            <td><a class="btn btn-primary" href="{{ route('civilregistry.edit',$cr->id)}}" >Edit</a></td>
            <td>
              <form action="{{ route('civilregistry.destroy', $cr->id)}}" method="post">
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