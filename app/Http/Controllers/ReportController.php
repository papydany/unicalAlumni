<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $a=Report::orderBy('id','desc')->paginate(500);
        return view('report.index')->with('a',$a);
    }

    public function detail($id)
    {
        $d=Report::find($id);
        return view('report.details')->with('d',$d);
    }
    public function edit($id)
    {
        $d=Report::find($id);
        return view('report.edit')->with('a',$d);
    }

    public function delete($id)
    {
        $a=Report::destroy($id);
        return redirect()->action([ReportController::class, 'index']);
    }

    public function update(Request $request){
               //check if email exist
       $checkEmailExist=Report::where('id',$request->id)->first();
       if($checkEmailExist != null)
       {

$checkEmailExist->content =$request->content;
$checkEmailExist->title =$request->title;
$checkEmailExist->attachment =$request->attachment;
$checkEmailExist->save();
return redirect()->action([ReportController::class, 'detail'], ['id' => $request->id]);
       }
    }

public function add(){
           return view('report.add');
}

public function store(Request $request)
{
    $Report = new Report;    
   $Report->content =$request->content;
   $Report->title = $request->title;
   $Report->attachment =$request->attachment;
   $Report->save();
return redirect()->action([ReportController::class, 'detail'], ['id' => $Report->id]);
}
}
