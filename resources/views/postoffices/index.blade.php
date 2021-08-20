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
    <a class="btn btn-primary" href="{{ route('postoffices.create') }}"> Create New Post Office</a>
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
        @foreach($postoffices as $postoffice)
        <tr>
            <td>{{$postoffice->id}}</td>
            <td>{{ $postoffice->name }}</td>
            <td><a class="btn btn-primary" href="{{ route('postoffices.show',$postoffice->id) }}">Show</a></td>
            <td><a class="btn btn-primary" href="{{ route('postoffices.edit',$postoffice->id)}}" >Edit</a></td>
            <td>
              <form action="{{ route('postoffices.destroy', $postoffice->id)}}" method="post">
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