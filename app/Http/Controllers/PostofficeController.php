<?php

namespace App\Http\Controllers;

use App\Models\Postoffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostoffices(Request $request){
        if (
            $postoffice= Postoffice::whereHas('city', function ($query) use ($request) {
                return $query->where('id', $request->city_id);})->get())
       
        return view('postofficesOfCity',["postoffice"=>$postoffice]);

    }
    public function index()
    {
        //
        $postoffice = Postoffice::all();
        return view("postoffices.index", ["postoffices"=>$postoffice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("postoffices.create");
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
        Postoffice::create([
            'name'=>$request['name'],
            'code'=>$request['code'],
            'address'=>$request['address'],
            'city_id'=>DB::table('cities')->where('name',$request['city_name'])->value('id'),
            'map'=>$request['map']
        ]);
        return redirect(route("postoffices.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postoffice  $postoffice
     * @return \Illuminate\Http\Response
     */
    public function show(Postoffice $postoffice)
    {
        //
        return (view("postoffices.show", ["postoffice"=>$postoffice]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postoffice  $postoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(Postoffice $postoffice)
    {
        //
        return (view("postoffices.edit", ["postoffice"=>$postoffice]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postoffice  $postoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postoffice $postoffice)
    {
        //
        $postoffice->update([
            'name'=>$request['name'],
            'code'=>$request['code'],
            'address'=>$request['address'],
            'city_id'=>DB::table('cities')->where('name',$request['city_name'])->value('id'),
            'map'=>$request['map']
        ]);
        return redirect(route("postoffices.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postoffice  $postoffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postoffice $postoffice)
    {
        //
        $postoffice->delete();
        return redirect(route("postoffices.index"));
    }

    public function getPostoffice(Postoffice $postoffice){
        return (view("showPostoffice", ["postoffice"=>$postoffice]));
    }

    function showall()
    {
       $data= Postoffice::all();
        return view ('postofficeall',['postofficelist'=>$data]);
    }
}
