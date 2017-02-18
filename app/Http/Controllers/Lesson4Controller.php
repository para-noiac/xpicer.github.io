<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson4;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson4::all();
        return view('lessons.lesson4.index',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lesson4::create($request->all());

        return redirect(route('lesson4.index'));
    }

}
