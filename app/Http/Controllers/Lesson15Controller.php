<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Lesson15;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson15::toplevel()->get();

        return view('lessons.lesson15.index',compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = new Lesson15;
        $record->name = $request->randomtext;
        $result = $record->save();

        if($result) {
            return ['success'=>true];
        }
    }
    public function storelevel(Request $request)
    {
        $this->savechild($request->data);
        return ['success'=>true];
    }

    protected function savechild($data,$parent_id = 0)
    {
        foreach ($data as $key => $row) {
            if(isset($row["children"])) {
                $this->savechild($row["children"],$row["id"]);
            }
            else {
                $record = Lesson15::find($row["id"]);
                if($record->parent_id != $parent_id) {
                    $record->parent_id = $parent_id;
                    $record->save();
                }
            }
        }
    }
}
