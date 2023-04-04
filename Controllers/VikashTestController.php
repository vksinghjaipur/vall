<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VikashTestController extends Controller
{
    public function index(Request $request)
    {        
        return view('index');
    }


    public function salaryGet(Request $request)
    {
        $emp_detail=DB::table('employee')->get();

        $salary=DB::table('employee')
        ->orderBy('salary', 'DESC')
        ->limit('1')
        ->offset('1')
        ->get();

        $name=DB::table('employee')
        ->orderBy('id', 'DESC')
        ->limit('1')
        ->offset('1')
        ->get();
        
        return view('salary',compact('emp_detail', 'salary','name'));
    }
}
