<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventmember extends Model
{
	protected $connection = 'mysql';
	protected $primaryKey = 'id';
	protected $table = 'eventmembers';
	protected $fillable = array(
			'member_id',
			'event_id',
	);
	public $timestamps = True;

	
    public function event() {
    	return $this->belongsTo(Event::class);
    }
}
