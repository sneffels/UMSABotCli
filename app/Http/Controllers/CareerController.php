<?php

namespace App\Http\Controllers;

use App\Career;
use App\Faculty;
use Illuminate\Http\Request;

use App\Http\Requests;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers=Career::orderBy('facultyId')->with('faculty')->get();
        return view('careers.index',['careers'=>$careers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facs=Faculty::all();
        return view('careers.create',['facs'=>$facs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career=new Career();

        $career->name=$request->name;
        $career->description=$request->description;
        $career->dean=$request->dean;

        $career->location_lat=$request->location_lat;
        $career->location_long=$request->location_long;
        $career->address=$request->address;
        $career->phone=$request->phone;
        $career->social_facebook=$request->social_facebook;
        $career->social_twitter=$request->social_twitter;
        $career->web_address=$request->web_address;
        $career->facultyId=$request->facultyId;
        $career->pensum_url=$request->pensum_url;
        $career->save();

        return redirect('careers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $career=Career::with('faculty')->find($id);
        return view('careers.show',['career'=>$career]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career=Career::find($id);
        $facs=Faculty::all();
        return view('careers.edit',['career'=>$career,'facs'=>$facs]);
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
        $career=Career::find($id);

        $career->name=$request->name;
        $career->description=$request->description;
        $career->dean=$request->dean;

        $career->location_lat=$request->location_lat;
        $career->location_long=$request->location_long;
        $career->address=$request->address;
        $career->phone=$request->phone;
        $career->social_facebook=$request->social_facebook;
        $career->social_twitter=$request->social_twitter;
        $career->web_address=$request->web_address;
        $career->facultyId=$request->facultyId;
        $career->pensum_url=$request->pensum_url;
        $career->save();

        return redirect('careers/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career=Career::find($id);
        $career->delete();
        return redirect('careers');
    }
}
