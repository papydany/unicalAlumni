<?php
namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\NewsLetter;
use Illuminate\Support\Facades\Mail;
use App\Mail\UnicalAlumni;
use App\Models\Alumni;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class SendQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $recipient;
    protected $id;
   // public $timeout = 7200;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request)
    {
    
        $this->id =$request->id;
        $this->recipient =$request->recipient;
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->recipient == 1)
        {
       $all =Alumni::get();
        }elseif($this->recipient == 2){
        $all =Alumni::where('status',1)->get();
        }elseif($this->recipient ==3){
        $all =Alumni::where('status',0)->get();
        }
        if(count($all) != 0){
        $NewsLetter =NewsLetter::find($this->id);
        $body = $NewsLetter->content;
        $subject=$NewsLetter->subject;


        foreach($all as $v){
      
        $email = strtolower($v->email);
        $email = preg_replace('/\s+/', '', $email);
        $name = $v->name;
    
        $token =base64_encode($email);
      Mail::to($email)->send(new UnicalAlumni($body,$name,$subject,$token));
      DB::table('alumnis')
      ->where('id', $v->id)
      ->update(['token' => $token]);
        
    }
}
    }
}
