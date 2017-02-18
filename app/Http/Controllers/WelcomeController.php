<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return [
            'lesson1'=>[
                'name'=>'Lesson 1',
                'description'=>'Simple Listing',
                'link'=>route('lesson1.index'),
            ],
            'lesson2'=>[
                'name'=>'Lesson 2',
                'description'=>'Simple Form Submit',
                'link'=>route('lesson2.index'),
            ],
            'lesson3'=>[
                'name'=>'Lesson 3',
                'description'=>'Form Submit With Validation',
                'link'=>route('lesson3.index'),
            ],
            'lesson4'=>[
                'name'=>'Lesson 4',
                'description'=>'Form Submit With Different Inputs (Simple)',
                'link'=>route('lesson4.index'),
            ],
            'lesson5'=>[
                'name'=>'Lesson 5',
                'description'=>'Multiple Selection',
                'link'=>route('lesson5.index'),
            ],
            'lesson6'=>[
                'name'=>'Lesson 6',
                'description'=>'DataTables',
                'link'=>route('lesson6.index'),
            ],
            'lesson7'=>[
                'name'=>'Lesson 7',
                'description'=>'DataTables ( Server-side )',
                'link'=>route('lesson7.index'),
            ],
            'lesson8'=>[
                'name'=>'Lesson 8',
                'description'=>'VueJS Introduction',
                'link'=>route('lesson8.index'),
            ],
        ];
    }
}
