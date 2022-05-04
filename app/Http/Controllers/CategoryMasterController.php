<?php

namespace App\Http\Controllers;

use App\Models\CategoryMaster;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
class CategoryMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= CategoryMaster::all();  
        return view('categorymaster.index', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= CategoryMaster::all();  
        return view('categorymaster.create', compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new CategoryMaster();  
        $category->cname = $request->get('cname'); 
        $request->validate([
            'cname'             => 'required',                        
        ]);
       
        $category->save();
		//return back()->with('success', "New Category Added");
		
		//return ("New Category Added");
        return redirect('/categorymaster');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryMaster  $categoryMaster
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryMaster $categoryMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryMaster  $categoryMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= categorymaster::find($id);  
		return view('categorymaster.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryMaster  $categoryMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category= categorymaster::find($id);
        $category->cname = $request->get('cname'); 
        $request->validate([
            'cname'             => 'required',                        
        ]);
            
        $category->save();
        //return back()->with('success', "Category Details Updated");
		
		return ("Category Details Updated");
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryMaster  $categoryMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =categorymaster::find($id); 
		$category->delete();
        return redirect('/categorymaster');
       //return (" Category Record Deleted");    
        
    
    }
}
