@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View Hospital
      <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>    
  </div>
  <div class="card-body" align="right">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Name')}}:</strong>
                   {{$hospital->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Phone')}}:</strong>
                {{$hospital->phone}}
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Special')}}:</strong>
                {{$hospital->special}}
            </div>
        </div> --}}
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.City')}}:</strong>
                {{DB::table('cities')->where('id',$hospital->city_id)->value('name')}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Address')}}:</strong>
                {{$hospital->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Map')}}</strong>
                {!! $hospital->map !!}
            </div>
        </div>

    </div>
  </div>
</div>
@endsection