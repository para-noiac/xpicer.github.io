<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson9;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson9Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson9::all();
        return view('lessons.lesson9.index',compact('records'));
    }

    public function store(Request $request)
    {
        if(Lesson9::create($request->all())) {
            return ["success"=>true];
        }
        else {
            return ["success"=>false];   
        }
    }
}
