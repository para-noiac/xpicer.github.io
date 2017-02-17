<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson2;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson2::all();

        return view('lessons.lesson2.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lessons.lesson2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = Lesson2::create($request->all());

        return redirect(route('lesson2.index'));
    }
}
