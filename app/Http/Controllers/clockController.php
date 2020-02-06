<?php

namespace App\Http\Controllers;
use App\Models\Employees;

use Illuminate\Http\Request;

class clockController extends Controller
{
    public function index(){
        return view('timeTracker');
    }

    public function showClock(){
            $employees = Employees::all();
            return view('timeTracker', compact('employees'));
    }

    public function clockIn(Request $request){
        $emp= Employees::find($request->id);
        
    }
}
  
