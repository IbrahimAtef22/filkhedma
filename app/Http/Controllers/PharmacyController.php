<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use App\Models\Postoffice;
use App\Models\Civilregistry;
use App\Models\Hospital;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getServices(Request $request){
         if($request['service']=="pharmacies"){
                $pharmacy= Pharmacy::whereHas('city', function ($query) use ($request) {
                     $query->where('id', $request->city_id);})->get();
               return view('pharmaciesOfCity',["pharmacy"=>$pharmacy]);
            }
        else if($request['service']=="civilregistry"){
            $civilregistry= Civilregistry::whereHas('city', function ($query) use ($request) {
                $query->where('id', $request->city_id);})->get();
          return view('civilregistriesOfCity',["civilregistry"=>$civilregistry]);
        }
        else if ($request['service']=="hospitals"){
            $hospital= Hospital::whereHas('city', function ($query) use ($request) {
                 $query->where('id', $request->city_id);})->get();
       
        return view('hospitalsOfCity',["hospital"=>$hospital]);
        }

        else{
            $postoffice= Postoffice::whereHas('city', function ($query) use ($request) {
                $query->where('id', $request->city_id);})->get();
             return view('postofficesOfCity',["postoffice"=>$postoffice]);
        }
    }
    public function index()
    {
        //
        $pharmacy = Pharmacy::all();
        return view("pharmacies.index", ["pharmacies"=>$pharmacy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("pharmacies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Pharmacy::create([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'delivery'=>$request['delivery'],
            'address'=>$request['address'],
            'city_id'=>DB::table('cities')->where('name',$request['city_name'])->value('id'),
            'map'=>$request['map']
        ]);
        return redirect(route("pharmacies.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function show(Pharmacy $pharmacy)
    {
        //
        return(view("pharmacies.show", ["pharmacy"=>$pharmacy]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function edit(Pharmacy $pharmacy)
    {
        //
        return view("pharmacies.edit", ["pharmacy"=>$pharmacy]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pharmacy $pharmacy)
    {
        //
        $pharmacy->update([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'delivery'=>$request['delivery'],
            'address'=>$request['address'],
            'city_id'=>DB::table('cities')->where('name',$request['city_name'])->value('id'),
            'map'=>$request['map']
        ]);
        return redirect(route("pharmacies.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pharmacy $pharmacy)
    {
        //
        $pharmacy->delete();
        return redirect(route("pharmacies.index"));
    }

    public function getPharmacy(Pharmacy $pharmacy)
    {
        //
        return(view("showPharmacy", ["pharmacy"=>$pharmacy]));
    }

    function showall()
    {
       $data= Pharmacy::all();
        return view ('pharmacyall',['pharmacylist'=>$data]);
    }
}
