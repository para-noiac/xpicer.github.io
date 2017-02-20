<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Lessons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = $this->lessons();
        return view('welcome',compact('lessons'));
    }

    protected function lessons()
    {
        return Lessons::all();
    }
}
