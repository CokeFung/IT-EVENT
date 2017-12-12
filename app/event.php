<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{

	protected $connection = 'mysql';
	protected $primaryKey = 'id';
	protected $table = 'events';
	protected $fillable = array(
			'event_avatar',
			'event_name',
			'description',
			'starttime',
			'endtime',
			'rating',
			'owner',
			'type',
	);
	public $timestamps = True;

    public function eventmember() {
    	return $this->hasMany(Eventmember::class);
    }
}
