<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson5;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson5::all();
        return view('lessons.lesson5.index',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lesson5::create($request->all());

        return redirect(route('lesson5.index'));
    }
}
