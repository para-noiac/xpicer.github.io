<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson15 extends Model
{
	// By Laravel default you do not have to put this. It will auto-linked.
	// I place it here because of Retail Portal.
	
    /**
	 * The table associated with the model.
	 * The connection name for the model.
	 * Indicates if the model should be timestamped.
	 *
	 */
	protected $table      = 'lesson15';
	protected $connection = 'mysql';
	public    $timestamps = true;

	protected $fillable = [];

	public function scopeToplevel($query)
	{
		return $query->where('parent_id',0);
	}

	public function childs()
	{
		return $this->hasMany('App\Model\Lesson15','parent_id','id');
	}

}
