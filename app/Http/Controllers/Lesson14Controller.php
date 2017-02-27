<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson14;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lesson14Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Lesson14::ordered()->get();

        return view('lessons.lesson14.index',compact('records'));
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
            case 'nest':
                return $this->savenest($request);
                break;
            case 'reset':
                return $this->savereset($request);
                break;
        }
        return redirect(route('lesson14.index'));
    }

    protected function savenest(Request $request)
    {
        foreach ($request->data as $key => $row) {
            $record = Lesson14::find($row["id"]);
            if($record->order != $key) {
                $record->order = $key;
                $record->save();
            }
        }

        return ['success'=>true];
    }

    protected function savereset(Request $request)
    {
        Lesson14::where('order','!=',0)->update(['order'=>0]);

        return redirect(route('lesson14.index'));
    }
}
