<?php

namespace App\Model;

class Lessons
{
	public static function all()
	{
		return self::data();	
	}

    public static function get($text)
    {
        return head(array_where(self::data(), function ($key,$value) use ($text) {
            return $key == $text;
        }));
    }

	protected static function data()
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
            'lesson9'=>[
                'name'=>'Lesson 9',
                'description'=>'VueAjax (Vue-resource, deprecated, using for current projects)',
                'link'=>route('lesson9.index'),
            ],
            'lesson10'=>[
                'name'=>'Lesson 10',
                'description'=>'VueAjax (Axios, using for new projects)',
                'link'=>route('lesson10.index'),
            ],
        ];
	}
}
