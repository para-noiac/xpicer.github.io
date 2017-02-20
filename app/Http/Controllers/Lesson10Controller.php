<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson10;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson10::all();
        return view('lessons.lesson10.index',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Lesson10::create($request->all())) {
            return ["success"=>true];
        }
        else {
            return ["success"=>false];   
        }
    }
}
