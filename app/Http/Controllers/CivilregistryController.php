<?php

namespace App\Http\Controllers;

use App\Models\Civilregistry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CivilregistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $civilregistry = Civilregistry::all();
        return view("civilregistry.index", ["civilregistry"=>$civilregistry]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("civilregistry.create");
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
        Civilregistry::create([
            'name'=>$request['name'],
            'address'=>$request['address'],
            'phone'=>$request['phone'],
            'city_id'=>DB::table('cities')->where('name',$request['city_name'])->value('id'),
            'map'=>$request['map']
        ]);
        return redirect(route("civilregistry.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Civilregistry  $civilregistry
     * @return \Illuminate\Http\Response
     */
    public function show(Civilregistry $civilregistry)
    {
        //
        return (view("civilregistry.show", ["civilregistry"=>$civilregistry]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Civilregistry  $civilregistry
     * @return \Illuminate\Http\Response
     */
    public function edit(Civilregistry $civilregistry)
    {
        //
        return (view("civilregistry.edit", ["civilregistry"=>$civilregistry]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Civilregistry  $civilregistry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Civilregistry $civilregistry)
    {
        //
        $civilregistry->update([
            'name'=>$request['name'],
            'address'=>$request['address'],
            'phone'=>$request['phone'],
            'city_id'=>DB::table('cities')->where('name',$request['city_name'])->value('id'),
            'map'=>$request['map']
        ]);
        return redirect(route("civilregistry.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Civilregistry  $civilregistry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Civilregistry $civilregistry)
    {
        //
        $civilregistry->delete();
        return redirect(route("civilregistry.index"));
    }
    public function getcivilregistry(Civilregistry $civilregistry)
    {
        //
        return (view("showCivilregistry", ["civilregistry"=>$civilregistry]));
    }

    function showall()
    {
       $data= Civilregistry::all();
        return view ('civilregistryall',['civilregistrylist'=>$data]);
    }
}
