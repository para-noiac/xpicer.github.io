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
                'description'=>'DataTables (Server-side)',
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
            'lesson11'=>[
                'name'=>'Lesson 11',
                'description'=>'Upload Images / PDF (Single, Form Submit)',
                'link'=>route('lesson11.index'),
            ],
            'lesson12'=>[
                'name'=>'Lesson 12',
                'description'=>'Upload Images / PDF (DropZoneJS)',
                'link'=>route('lesson12.index'),
            ],
            'lesson13'=>[
                'name'=>'Lesson 13',
                'description'=>'Tooltips & Popover',
                'link'=>route('lesson13.index'),
            ],
            'lesson14'=>[
                'name'=>'Lesson 14',
                'description'=>'Nested Sortable Lists - Single Level, Sorting',
                // 'link'=>route('lesson14.index'),
            ],
            'lesson15'=>[
                'name'=>'Lesson 15',
                'description'=>'Nested Sortable Lists - Multi Level',
                'link'=>route('lesson15.index'),
            ],
            
            'lesson16'=>[
                'name'=>'Lesson 16',
                'description'=>'Import Preview',
                // 'link'=>route('lesson15.index'),
            ],
            'lesson16'=>[
                'name'=>'Lesson 16',
                'description'=>'Eloquent',
                // 'link'=>route('lesson16.index'),
            ],
        ];
	}
}
