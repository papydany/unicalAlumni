<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function contact()
    {
        return view('frontend.contact');
    }

    public function trustfund()
    {
        return view('frontend.trustfund');
    }

    public function endowmentfund()
    {
        return view('frontend.endowmentfund');
    }

    public function investment()
    {
        return view('frontend.investment');
    }
    public function board()
    {
        return view('frontend.board');
    }
    public function management()
    {
        return view('frontend.management');
    }

    public function community()
    {
        return view('frontend.community');
    }
    public function partner()
    {
        return view('frontend.partner');
    }
    public function event()
    {
        $e =Event::paginate(24);
        return view('frontend.event')->with('e',$e);
    }
    public function eventDetail($id)
    {
        $e =Event::find($id);
        $e4 =Event::orderBy('id','desc')->limit(5)->get();
        return view('frontend.eventDetail')->with('e',$e)->with('e4',$e4);
    }
    public function programme()
    {
        return view('frontend.programme');
    }
    public function volunteer()
    {
        return view('frontend.volunteer');
    }

    public function alumni()
    {
        return view('frontend.alumni');
    }

    public function giving()
    {
        return view('frontend.giving');
    }

    public function data_protection_policy()
    {
        return view('frontend.data_protection_policy');
    }

    public function privacy_policy()
    {
        return view('frontend.privacy_policy');
    }
}
