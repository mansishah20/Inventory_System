<?php

namespace App\Http\Controllers;
use App\Models\CategoryMaster;
use App\Models\ItemMaster;
Use APP\Models\InwardRegister;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('home.login');
    }
    public function signin()
    {
        return view('home.signin');
    }

    
}
