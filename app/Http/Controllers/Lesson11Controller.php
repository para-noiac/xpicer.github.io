<?php

namespace App\Http\Controllers;

use File;
use Storage;
use App\Model\Lesson11;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson11::all();
        return view('lessons.lesson11.index',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->uploadedfile) {
            $record = new Lesson11;
            $record->name = $request->uploadedfile->getClientOriginalName();
            $record->path = 'lesson11/'.$request->uploadedfile->getClientOriginalName();
            $record->save();
            Storage::put($record->path,File::get($request->uploadedfile));
        }

        return redirect(route('lesson11.index'));
    }

    public function view(Request $request)
    {
        $record = Lesson11::find($request->id);

        return response(Storage::get($record->path), 200)->header('Content-Type', mime_content_type(storage_path()."/app/".$record->path));
    }
}
