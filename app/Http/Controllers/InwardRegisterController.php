<?php

namespace App\Http\Controllers;
use App\Models\CategoryMaster;
use App\Models\ItemMaster;
use App\Models\PlaceMaster;
use App\Models\UserMaster;
use App\Models\InwardRegister;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InwardRegisterController extends Controller
{
    public function index()
    {
        $inward = DB::Table('inward_registers')
        ->join('item_masters','inward_registers.itemid','=','item_masters.id')
        ->join('place_masters','inward_registers.pid','=','place_masters.id')
        ->join('user_masters','inward_registers.uid','=','user_masters.id')
        ->select('item_masters.iname','place_masters.landmark','user_masters.uname','item_masters.currentstock','item_masters.mrp','inward_registers.expiredate')
        ->get();


        return view('inwardregister.index', compact('inward'));
    }

    
    public function create($id){
      $item= ItemMaster::find($id);
        $place=PlaceMaster::all();
        $user=UserMaster::all();
        return view('inwardregister.create', compact('item', 'place', 'user'));
    }
    
    public function filter(Request $request)
    {
        //$inward= InwardRegister::paginate(10);
        //$item = $request->get("item"); 
        if(isset($_POST['item']))
        {
            $iname = $request->get("iname");
        $inward = DB::Table('inward_registers')
        ->join('item_masters','inward_registers.itemid','=','item_masters.id')
        ->join('place_masters','inward_registers.pid','=','place_masters.id')
        ->join('user_masters','inward_registers.uid','=','user_masters.id')
        ->select('item_masters.iname','place_masters.landmark','user_masters.uname','item_masters.currentstock','item_masters.mrp','inward_registers.expiredate')
        ->where('item_masters.iname',$iname)
        ->get();
        return view('inwardregister.filter', compact('inward'));
        }
        
        elseif(isset($_POST['date']))
        {
            $sdate = $request->get("sdate");
            $edate = $request->get("edate");
        $inward = DB::Table('inward_registers')
        ->join('item_masters','inward_registers.itemid','=','item_masters.id')
        ->join('place_masters','inward_registers.pid','=','place_masters.id')
        ->join('user_masters','inward_registers.uid','=','user_masters.id')
        ->select('item_masters.iname','place_masters.landmark','user_masters.uname','item_masters.currentstock','item_masters.mrp','inward_registers.expiredate','inward_registers.created_at')
        ->where('inward_registers.created_at','>=',$sdate)
        ->where('inward_registers.created_at','<=',$edate)
        ->get();
        return view('inwardregister.filter', compact('inward'));
        }

        else{
            return ("Please Select one Checkbox");
        }
        
      
    }
    
     public function store(Request $request)
    {
        $inward = new InwardRegister();  
        $inward->itemid = $request->get('itemid');  
        $inward->pid = $request->get('pid');  
        $inward->uid= $request->get('uid');
        $inward->quantity= $request->get('quantity');
        $inward->price= $request->get('price');
        $inward->expiredate= $request->get('expiredate');   
        $inward->save();

        $item=ItemMaster::find($request->get('itemid'));
        $item->currentstock=$item->currentstock + $request->get('quantity');
        $item->save();
        return back()->with('success',"New Item Added");
		
		//return redirect('/inwardregister');
    
       // return redirect('/inwardregister/index');
    }

    public function destroy($id)
    {
        $inward =inwardregister::find($id); 
		$inward->delete();
       return (" Inward Record Deleted");  
    }
    
}
