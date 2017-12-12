<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Validator;
use Carbon\Carbon;
use App\event;
use App\eventmember;
use Auth;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $event1 = DB::table('events')->where('type', '1')->where('endtime', '>', Carbon::now()->startOfDay())->get();
        $event2 = DB::table('events')->where('type', '2')->where('endtime', '>', Carbon::now()->startOfDay())->get();
        $event3 = DB::table('events')->where('type', '3')->where('endtime', '>', Carbon::now()->startOfDay())->get();
        $event4 = DB::table('events')->where('type', '4')->where('endtime', '>', Carbon::now()->startOfDay())->get();

        $event01 = array('events1' => $event1, 'events2' => $event2, 'events3' => $event3, 'events4' => $event4);
        $event02 = array('events1' => $event1, 'events2' => $event2, 'events3' => $event3, 'events4' => $event4);

        return view('home')->with( array('event1' => $event01, 'event2' => $event02));
    }

    public function createEvent() {
        return view('create_event', array('user' => Auth::user()));
    }

    public function editEvent(Request $request) {

        $findevent = DB::table('events')->where('id', $request->event_id)->get();

        return view('editevent')->with('myevent', $findevent);
    }

    public function ownerEditEvent(Request $request){

        $event = DB::table('events')->where('id', $request->id);
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(500, 300)->save(public_path('/uploads/event_avatar/' . $filename));
            $event->update(['event_avatar' => $filename]);
        }

        $event->update(['event_name' => $request->name]);
        $event->update(['description' => $request->description]);
        $event->update(['starttime' => $request->starttime]);
        $event->update(['endtime' => $request->endtime]);
        $event->update(['type' => $request->type]);

        $user = Auth::user()->id;
        $ownevents = DB::table('events')->where('owner', $user)->get();
        return view('myevent')->with('ownevents', $ownevents);
    }

    public function myEvent() {
        $user = Auth::user()->id;
        //$ownevents = DB::table('events')->get();
        $ownevents = DB::table('events')->where('owner', $user)->where('endtime', '>', Carbon::now()->startOfDay())->get();
        return view('myevent')->with('ownevents', $ownevents);
        //return view('myevent', array('user' => Auth::user()));
    }

    public function deleteEvent(Request $request){
        DB::table('events')->where('id', $request->event_id)->delete();
        $user = Auth::user()->id;
        $ownevents = DB::table('events')->where('owner', $user)->get();
        return view('myevent')->with('ownevents', $ownevents);
    }

    public function checkEvent(Request $request){
        $event = DB::table('events')->where('id', $request->event_id)->get();
        $allmember = DB::table('eventmembers')->where('event_id', $request->event_id)->get();
        $allmember = $allmember->pluck('member_id');
        $alluser = DB::table('users')->whereIn('id', $allmember)->get();

        $isinevent = DB::table('eventmembers')->where('event_id', $request->event_id)->where('member_id', Auth::user()->id)->get();

        return view('check_event')->with('event', $event)
                                  ->with('member', $alluser)
                                  ->with('inevent', $isinevent)
                                  ->with('event1', $event)
                                  ->with('member1', $alluser)
                                  ->with('inevent1', $isinevent);
    }

    public function joinEvent(Request $request){
        $join = new eventmember;

        $join->event_id = $request->event_id;
        $join->member_id = $request->user_id;
        $join->save();

        $event = DB::table('events')->where('id', $request->event_id)->get();

        $allmember = DB::table('eventmembers')->where('event_id', $request->event_id)->get();
        $allmember = $allmember->pluck('member_id');
        $alluser = DB::table('users')->whereIn('id', $allmember)->get();

        $isinevent = DB::table('eventmembers')->where('event_id', $request->event_id)->where('member_id', Auth::user()->id)->get();

        return view('check_event')->with('event', $event)
                                  ->with('member', $alluser)
                                  ->with('inevent', $isinevent)
                                  ->with('event1', $event)
                                  ->with('member1', $alluser)
                                  ->with('inevent1', $isinevent);
    }
}
