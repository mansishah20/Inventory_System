<?php

namespace App\Http\Controllers;
use DB;
use App\Models\UserMaster;
use Illuminate\Http\Request;

class UserMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $usermaster= UserMaster::all();  
            return view('usermaster.index', compact('usermaster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usermaster = UserMaster::all();
        return view("usermaster.create", compact('usermaster'));
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new UserMaster();  
        $user->uname = $request->get('uname');  
        $user->uemail= $request->get('uemail');
        $user->upassword= $request->get('upassword');
        $user->ucontact= $request->get('ucontact');
        $user->utype= $request->get('utype');   
        
		$request->validate([
            'uname'             => 'required',                        
            'uemail'            => 'required|email',
            'upassword'         => 'required',
            'cpassword'         => 'required_with:upassword|same:upassword',
            'ucontact'          => 'required|min:10|numeric',
            'utype'             => 'required'
        
        ]);
            
        $user->save();
        //return back()->with('success', "Record saved");
		//return ("New Account Created");
        return redirect('/login');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMaster  $userMaster
     * @return \Illuminate\Http\Response
     */
    public function show(UserMaster $userMaster)
    {
        //
    }

    public function check(Request $request)
    {
        $varuemail = $request->post('uemail');
        $varupassword = $request->post('upassword');
        $user = DB::select("select uemail,uname from user_masters where uemail='$varuemail' AND upassword='$varupassword'");
        if($user==NULL)
        {
           return redirect('/login');

        }
        else{
            $request->session()->put('uname',$user[0]->uname);
            return redirect('/inwardregister');
        }
       
    }
    public function logout(Request $request){
        $request->session()->forget('uname');
        return redirect('/login');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserMaster  $userMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= usermaster::find($id);  
		return view('usermaster.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserMaster  $userMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user =usermaster::find($id);  
		$user->uname =  $request->get('uname');  
        $user->uemail = $request->get('uemail');  
        $user->upassword = $request->get('upassword');  
        $user->ucontact = $request->get('ucontact');
		$user->save();
        $request->validate([
            'uname'             => 'required',                        
            'uemail'            => 'required|email',
            'upassword'         => 'required',
            'cpassword'         => 'required_with:upassword|same:upassword',
            'ucontact'          => 'required|min:10|numeric',
            'utype'             => 'required'
        
        ]);
            
        $user->save();
        //return back()->with('success', " User Record Edited");
        //
		return (" User Record Edited");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMaster  $userMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =usermaster::find($id); 
		 $user->delete();
         return redirect('/usermaster');
       //return ("User Account Deleted");
    }
}
