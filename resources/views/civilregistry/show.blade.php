@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View Civil Registry
      <a class="btn btn-primary" href="{{ route('civilregistry.index') }}"> Back</a>    
  </div>
  <div class="card-body" align="right">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Name')}}:</strong>
                   {{$civilregistry->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Phone')}}:</strong>
                {{$civilregistry->phone}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Address')}}:</strong>
                {{$civilregistry->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.City')}}:</strong>
                {{DB::table('cities')->where('id',$civilregistry->city_id)->value('name')}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>{{__('msg.Map')}}</strong>
              {!! $civilregistry->map !!}
          </div>
      </div>

    </div>
  </div>
</div>
@endsection