<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lesson7;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;

class Lesson7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Builder $htmlBuilder)
    {
        // https://github.com/yajra/laravel-datatables
        
        $ajaxdata = array(
            'url'=>route('lesson7.data'),
            'method'=>'POST',
            'headers'=>array(
                'X-CSRF-TOKEN'=>csrf_token()
                )
            );

        $parameters = array(
            'order'      =>[[ 0, "asc" ]],
            'paging'     =>true,
            'ordering'   =>true,
            'info'       =>true,
            'stateSave'  =>true,
            'lengthMenu' =>[[100, 1000, 5000, -1], [100, 1000, 5000, "All"]],
            'dom'        =>'<"top"pli>rt<"bottom"><"clear">',
            );

        $html = $htmlBuilder
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Id'])
            ->addColumn(['data' => 'column1', 'name' => 'column1', 'title' => 'Column1'])
            ->addColumn(['data' => 'column2', 'name' => 'column2', 'title' => 'Column2'])
            ->addColumn(['data' => 'column3', 'name' => 'column3', 'title' => 'Column3'])
            ->addColumn(['data' => 'column4', 'name' => 'column4', 'title' => 'Column4'])
            ->addColumn(['data' => 'column5', 'name' => 'column5', 'title' => 'Column5'])
            ->parameters($parameters)
            ->ajax($ajaxdata);

        return view('lessons.lesson7.index',compact('html'));
    }

    public function dtdata(Request $request)
    {
        if ($request->ajax()) {
            $records = Lesson7::select('*');
            return Datatables::of($records)->make(true);
        }
    }
}
