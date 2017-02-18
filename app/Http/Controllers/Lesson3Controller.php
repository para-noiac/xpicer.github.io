<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson3;
use App\Http\Requests\Lesson3Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson3::all();
        return view('lessons.lesson3.index',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_local(Request $request)
    {
        $this->validate($request,[
            'name_local'=>'required|unique:mysql.lesson3,name',
            'description_local'=>'required',
            ],[
            'name_local.required'=>'Name (Local) is required.',
            'name_local.unique'=>'Name (Local) must be unique.',
            'description_local.required'=>'Description (Local) is required.',
            ]);

        $record = new Lesson3;
        $record->name = $request->name_local;
        $record->description = $request->description_local;
        $record->save();

        return redirect(route('lesson3.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_global(Lesson3Request $request)
    {
        $record = new Lesson3;
        $record->name = $request->name_global;
        $record->description = $request->description_global;
        $record->save();

        return redirect(route('lesson3.index'));
    }
}
