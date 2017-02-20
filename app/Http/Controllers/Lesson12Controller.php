<?php

namespace App\Http\Controllers;

use File;
use Storage;
use App\Model\Lesson12;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson12::all();
        return view('lessons.lesson12.index',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file) {
            $record = new Lesson12;
            $record->name = $request->file->getClientOriginalName();
            $record->path = 'lesson12/'.$request->file->getClientOriginalName();
            $record->save();
            Storage::put($record->path,File::get($request->file));
            return ["success"=>true];
        }
    }

    public function show($id)
    {
        $record = Lesson12::find($id);

        return response(Storage::get($record->path), 200)->header('Content-Type', mime_content_type(storage_path()."/app/".$record->path));
    }
}
