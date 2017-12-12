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

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function profile(){
        return view('adminprofile', array('user' => Auth::user()));
    }

    public function editProfile(Request $request){

        $user = Auth::user();
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatar/' . $filename));
            $user->avatar = $filename;
        }
        $user->name = $request->name;
        $user->save();

        return view('adminprofile', array('user' => Auth::user()));
    }

    public function editEvent(){
        $findevent = DB::table('events')->get();
        return view('admineditevent')->with('ownevents', $findevent);
    }

    public function admindeleteEvent(Request $request){
        DB::table('events')->where('id', $request->event_id)->delete();
        $user = Auth::user()->id;
        $ownevents = DB::table('events')->get();
        return view('myevent')->with('ownevents', $ownevents);
    }

    public function admingetEvent(Request $request){
        $findevent = DB::table('events')->where('id', $request->event_id)->get();
        return view('admin-editevent')->with('myevent', $findevent);
    }

    public function admineditEvent(Request $request){
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
        $ownevents = DB::table('events')->get();
        return view('admineditevent')->with('ownevents', $ownevents);
    }
}
