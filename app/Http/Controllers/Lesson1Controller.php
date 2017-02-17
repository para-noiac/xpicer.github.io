<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson1;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson1::all();

        return view('lessons.lesson1.index',compact('records'));
    }
}
