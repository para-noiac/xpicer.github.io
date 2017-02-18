<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson5 extends Model
{
	// By Laravel default you do not have to put this. It will auto-linked.
	// I place it here because of Retail Portal.
	
    /**
	 * The table associated with the model.
	 * The connection name for the model.
	 * Indicates if the model should be timestamped.
	 *
	 */
	protected $table      = 'lesson5';
	protected $connection = 'mysql';
	public    $timestamps = false;

	protected $fillable = ['selection1','selection2','selection3','selection4'];

	protected $casts = [
		'selection2'=>'array',
		'selection4'=>'array',
	];
}
