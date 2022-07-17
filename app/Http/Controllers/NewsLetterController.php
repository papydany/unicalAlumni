<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class NewsLetterController extends Controller
{  
    public function index()
        {
          
            $a=NewsLetter::orderBy('id','desc')->paginate(500);
            return view('newsLetter.index')->with('a',$a);
        }
    
        public function detail($id)
        {
            $d=NewsLetter::find($id);
            return view('newsLetter.details')->with('d',$d);
        }
        public function edit($id)
        {
            $d=NewsLetter::find($id);
            return view('newsLetter.edit')->with('a',$d);
        }
    
        public function delete($id)
        {
            $a=NewsLetter::destroy($id);
            return redirect()->action([NewsLetterController::class, 'index']);
        }
    
        public function update(Request $request){
                   //check if email exist
           $checkEmailExist=NewsLetter::where('id',$request->id)->first();
           if($checkEmailExist != null)
           {
  
    $checkEmailExist->content =$request->content;
    $checkEmailExist->subject =$request->subject;
    $checkEmailExist->save();
    return redirect()->action([NewsLetterController::class, 'detail'], ['id' => $request->id]);
           }
        }
    
    public function add(){
               return view('newsLetter.add');
    }
    
    public function store(Request $request)
    {
       $NewsLetter = new NewsLetter;    
       $NewsLetter->content =$request->content;
       $NewsLetter->status = 0;
       $NewsLetter->subject =$request->subject;
       $NewsLetter->save();
    return redirect()->action([NewsLetterController::class, 'detail'], ['id' => $NewsLetter->id]);
    }
    public function upload(Request $request){
       /* $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location'=>"/storage/$path"]);*/
        
        $imgpath = request()->file('file')->store('uploads','public');
    
      //  $imgpath =url('/')."/storage/".$imgpath;
        return response()->json(['location' =>url("/")."/storage/".$imgpath]);

    }
    public function send($id){
        $d=NewsLetter::find($id);
        return view('newsLetter.send')->with('a',$d);
}

public function sendPost(Request $request){
   
    
$job = (new \App\Jobs\SendQueueEmail($request))
->delay(now()->addSeconds(60)); 
 dispatch($job);
 echo "Mail send successfully !!";
 Session::flash('success',"SUCCESSFUL.");
 return redirect()->action([NewsLetterController::class,'send'], ['id' => $request->id]);
}
    }
    

