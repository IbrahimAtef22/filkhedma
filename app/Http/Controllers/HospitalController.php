<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHospitals(Request $request){
        if (
            $hospital= Hospital::whereHas('city', function ($query) use ($request) {
                return $query->where('id', $request->city_id);})->get())
       
        return view('hospitalsOfCity',["hospital"=>$hospital]);

    }
    public function index()
    {
        //
        $hospital = Hospital::all();
        return view("hospitals.index", ["hospitals"=>$hospital]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("hospitals.create");
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
        Hospital::create([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'special'=>$request['special'],
            'address'=>$request['address'],
            'city_id'=>DB::table('cities')->where('name',$request['city_name'])->value('id'),
            'map'=>$request['map']
        
        ]);
        return redirect(route("hospitals.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
        return(view("hospitals.show", ["hospital"=>$hospital]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //
        return view("hospitals.edit", ["hospital"=>$hospital]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        //
        $hospital->update([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'special'=>$request['special'],
            'address'=>$request['address'],
            'city_id'=>DB::table('cities')->where('name',$request['city_name'])->value('id'),
            'map'=>$request['map']
      
        ]);
        return redirect(route("hospitals.index"));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        //
        $hospital->delete();
        return redirect(route("hospitals.index"));
    }
    public function getHospital(Hospital $hospital){
        return (view("showHospital", ["hospital"=>$hospital]));
    }

    function showall()
    {
       $data= Hospital::all();
        return view ('hospitalall',['hospitallist'=>$data]);
    }
}
