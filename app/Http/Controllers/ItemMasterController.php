<?php

namespace App\Http\Controllers;
use App\Models\CategoryMaster;
use App\Models\ItemMaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ItemMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        if(session()->has('uname'))
        {
            $item = DB::Table('item_masters')
            ->join('category_masters','item_masters.catid','=','category_masters.id')
            ->select('item_masters.iname','item_masters.id','item_masters.currentstock','item_masters.minstock')
            ->get();
            //return view('itemmaster.index', compact('item'));
            return view('home.index', compact('item'));
        }
        else
        {
            return redirect('/login');
        }
        
       
    }

    public function index()
    {
        $item = DB::Table('item_masters')
        ->join('category_masters','item_masters.catid','=','category_masters.id')
        ->select('item_masters.id','item_masters.iname','category_masters.cname','item_masters.currentstock','item_masters.minstock','item_masters.image','item_masters.mrp')
        ->get();


        return view('itemmaster.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= CategoryMaster::all();  
        return view('itemmaster.create', compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new ItemMaster();  
        $item->catid = $request->get('catid');  
        $item->iname= $request->get('iname');
        $item->currentstock= $request->get('currentstock');
        $item->minstock= $request->get('minstock');

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('itemimages/'), $imageName);
        $item->image = $imageName;
        $item->mrp= $request->get('mrp');

        $request->validate([
            'catid'             => 'required',                        
            'iname'             => 'required',
            'currentstock'      => 'required|numeric',
            'minstock'          => 'required|numeric',
            'mrp'               => 'required|numeric',
        ]);
            
        $item->save();
        //return back()->with('success',"New Item Added");
		return redirect('/itemmaster');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemMaster  $itemMaster
     * @return \Illuminate\Http\Response
     */
    public function show(ItemMaster $itemMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemMaster  $itemMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= itemmaster::find($id);  
		return view('itemmaster.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemMaster  $itemMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item= itemmaster::find($id);
        $item->catid = $request->get('catid');  
        $item->iname= $request->get('iname');
        $item->currentstock= $request->get('currentstock');
        $item->minstock= $request->get('minstock');
       
        
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('itemimages/'), $imageName);
        $item->image = $imageName;
        $item->mrp= $request->get('mrp');
        
        $request->validate([
            'catid'             => 'required',                        
            'iname'             => 'required',
            'currentstock'      => 'required|numeric',
            'minstock'          => 'required|numeric',
            'mrp'               => 'required|numeric',
        ]);
    
        $item->save();
       // return back()->with('success',"Item Deatils Updated");

		return ("Item Deatils Updated ");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemMaster  $itemMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =itemmaster::find($id); 
		$item->delete();
        return redirect('/itemmaster');
       //return (" Item Record Deleted");  
    }
}
