<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;

use App\Http\Requests;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facs=Faculty::all();
        return view('faculties.index',['facs'=>$facs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $faculty=new Faculty();

        $faculty->name=$request->name;
        $faculty->description=$request->description;
        $faculty->dean=$request->dean;
        $faculty->dean2=$request->dean2;
        $faculty->location_lat=$request->location_lat;
        $faculty->location_long=$request->location_long;
        $faculty->address=$request->address;
        $faculty->phone=$request->phone;
        $faculty->social_facebook=$request->social_facebook;
        $faculty->social_twitter=$request->social_twitter;
        $faculty->web_address=$request->web_address;
        $faculty->save();
        
        return redirect('faculties');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fac=Faculty::find($id);
        return view('faculties.show',['fac'=>$fac]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fac=Faculty::find($id);
        return view('faculties.edit',['fac'=>$fac]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $faculty=Faculty::find($id);

        $faculty->name=$request->name;
        $faculty->description=$request->description;
        $faculty->dean=$request->dean;
        $faculty->dean2=$request->dean2;
        $faculty->location_lat=$request->location_lat;
        $faculty->location_long=$request->location_long;
        $faculty->address=$request->address;
        $faculty->phone=$request->phone;
        $faculty->social_facebook=$request->social_facebook;
        $faculty->social_twitter=$request->social_twitter;
        $faculty->web_address=$request->web_address;
        $faculty->prefac_url=$request->prefac_url;
        $faculty->save();

        return redirect('faculties/'.$faculty->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faculty=Faculty::find($id);
        $faculty->delete();
        return redirect('faculties');
    }
}
