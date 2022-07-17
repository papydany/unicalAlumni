<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $a=Event::orderBy('id','desc')->paginate(500);
        return view('event.index')->with('a',$a);
    }

    public function detail($id)
    {
        $d=Event::find($id);
        return view('event.details')->with('d',$d);
    }
    public function edit($id)
    {
        $d=Event::find($id);
        return view('event.edit')->with('a',$d);
    }

    public function delete($id)
    {
        $a=Event::destroy($id);
        return redirect()->action([EventController::class, 'index']);
    }

    public function update(Request $request){
               //check if email exist
       $checkEmailExist=Event::where('id',$request->id)->first();
       if($checkEmailExist != null)
       {

$checkEmailExist->content =$request->content;
$checkEmailExist->title =$request->title;
$checkEmailExist->start_date =$request->start_date;
$checkEmailExist->end_date =$request->end_date;
$checkEmailExist->save();
return redirect()->action([EventController::class, 'detail'], ['id' => $request->id]);
       }
    }

public function add(){
           return view('event.add');
}

public function store(Request $request)
{
    $Event = new Event;    
   $Event->content =$request->content;
   $Event->title = $request->title;
   $Event->start_date =$request->start_date;
   $Event->end_date =$request->end_date;
   $Event->save();
return redirect()->action([EventController::class, 'detail'], ['id' => $Event->id]);
}


}
