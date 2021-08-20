@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View Post Office
      <a class="btn btn-primary" href="{{ route('postoffices.index') }}"> Back</a>    
  </div>
  <div class="card-body" align="right">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Name')}}:</strong>
                   {{$postoffice->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Code')}}:</strong>
                {{$postoffice->code}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Address')}}:</strong>
                {{$postoffice->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.City')}}:</strong>
                {{DB::table('cities')->where('id',$postoffice->city_id)->value('name')}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>{{__('msg.Map')}}</strong>
              {!! $postoffice->map !!}
          </div>
      </div>
    </div>
  </div>
</div>
@endsection