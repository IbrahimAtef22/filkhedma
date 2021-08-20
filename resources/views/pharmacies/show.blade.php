@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View Pharmacy
      <a class="btn btn-primary" href="{{ route('pharmacies.index') }}"> Back</a>    
  </div>
  <div class="card-body" align="right">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Name')}}:</strong>
                   {{$pharmacy->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Phone')}}:</strong>
                {{$pharmacy->phone}}
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Delivery:</strong>
                {{$pharmacy->delivery}}
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.City')}}:</strong>
                {{DB::table('cities')->where('id',$pharmacy->city_id)->value('name')}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Address')}}:</strong>
                {{$pharmacy->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{__('msg.Map')}}</strong>
                {!! $pharmacy->map !!}
            </div>
        </div>
    </div>
  </div>
</div>
@endsection