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
        switch ($request->action) {
            case 'add':
                return $this->saveadd($request);
                break;
            case 'nest':
                return $this->savenest($request);
                break;
            case 'reset':
                return $this->savereset($request);
                break;
        }
        return redirect(route('lesson15.index'));
    }

    protected function savereset(Request $request)
    {
        Lesson15::where('parent_id','!=',0)->update(['parent_id'=>0]);
        Lesson15::where('order','!=',0)->update(['order'=>0]);

        return redirect(route('lesson15.index'));
    }

    protected function saveadd(Request $request)
    {
        $record = new Lesson15;
        $record->name = $request->randomtext;
        $result = $record->save();

        if($result) {
            return redirect(route('lesson15.index'));
        }
    }

    protected function savenest(Request $request)
    {
        $this->savechild($request->data);

        return ['success'=>true];
    }

    protected function savechild($data,$parent_id = 0)
    {
        foreach ($data as $key => $row) {
            $record = Lesson15::find($row["id"]);
            if($record->parent_id != $parent_id) {
                $record->parent_id = $parent_id;
            }
            if($record->order != $key) {
                $record->order = $key;
            }
            $record->save();
            if(isset($row["children"])) {
                $this->savechild($row["children"],$row["id"]);    
            }
            
        }
    }
}
