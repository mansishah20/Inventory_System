<?php

namespace App\Http\Controllers;

use App\Models\PlaceMaster;
use Illuminate\Http\Request;

class PlaceMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placemaster= PlaceMaster::all();  
        return view('placemaster.index', compact('placemaster'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placemaster= PlaceMaster::all();  
        return view('placemaster.create', compact('placemaster'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new PlaceMaster();  
        $place->landmark = $request->get('landmark');  
        $place->location = $request->get('location');
        $place->contact = $request->get('contact');
        
		
        $request->validate([
            'landmark'             => 'required',                        
            'location'             => 'required',
            'contact'              => 'required|min:10|numeric',
        
        ]);
            
        $place->save();
        //return back()->with('success', "New Place Added");
		//return ("New Place Added");
        return redirect('/placemaster');

   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlaceMaster  $placeMaster
     * @return \Illuminate\Http\Response
     */
    public function show(PlaceMaster $placeMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlaceMaster  $placeMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place= placemaster::find($id);  
		return view('placemaster.edit', compact('place'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlaceMaster  $placeMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $place =placemaster::find($id);
        $place->landmark = $request->get('landmark');  
        $place->location = $request->get('location');
        $place->contact = $request->get('contact');
        $request->validate([
            'landmark'             => 'required',                        
            'location'             => 'required',
            'contact'              => 'required|min:10|numeric',
        
        ]);
            
        $place->save();
        //return back()->with('success', "New Place Added");
        
               return ("Place Details Updated");
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlaceMaster  $placeMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place =placemaster::find($id); 
		$place->delete();
        return redirect('/placemaster');
       //return ("Place Record Deleted");
    }
}
