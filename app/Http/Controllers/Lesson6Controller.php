<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson6;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson6::all();
        return view('lessons.lesson6.index',compact('records'));
    }
}
