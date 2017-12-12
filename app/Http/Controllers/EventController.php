<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\event;
use Auth;
use Image;

class EventController extends Controller
{
    public function createEvent(Request $request){
    	$event = new event;
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(500, 300)->save(public_path('/uploads/event_avatar/' . $filename));
    	}
    	else{
    		$filename = 'default_event_avatar.png';
    	}

    	$event->event_avatar = $filename;
		$event->event_name = $request->name;
		$event->description = $request->description;
		$event->starttime = $request->starttime;
		$event->endtime = $request->endtime;
		$event->rating = '5';
		$event->owner = Auth::user()->id;
        $event->type = $request->type;
		$event->save();

		return view('create_event', array('user' => Auth::user()));
    }

}
