<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NewsLetter;
use App\Models\Department;
use App\Models\State;
use App\Models\Alumni;
use App\Models\newsletterLog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\UnicalAlumni;

class GeneralController extends Controller
{
    public function getLGA($id)
    {
$lga =DB::table('lgas')->where('state_id',$id)->get();
return response()->json($lga);
    }

    public function getDonationSetup($id)
    {
$d =DB::table('donation_set_ups')->where('currencies',$id)->get();
return response()->json($d);
    }

    public function createAlumni()
    {
        $d=Department::orderBy('department_name','asc')->get();
        $s=State::orderBy('state_name','asc')->get();
        return view('auth.register')->with('d',$d)->with('s',$s);
    }

    public function storeAlumni(Request $request)
    {
       $surname =$request->surname;
       $name =$request->name;
       $middleName=$request->middleName;
       $email =$request->email;
       $phone =$request->phone;
       $day_month_of_birth =$request->date;
       $sex =$request->sex;
      $graduation_year =$request->yearGraduation;
       $department =$request->department;
      $contact_address =$request->contactAddress;
       $state_of_residence =$request->contactState;
       $country_of_residence =$request->contactCountry;
       $degree1=$request->degree1;
       $degree2 =$request->degree2;
       $degree3=$request->degree3;
       $degree4 =$request->degree4;
       $degree5=$request->degree5;
       $degree =$degree1.','.$degree2.','.$degree3.','.$degree4.','.$degree5;
     
       //check if email exist
       $checkEmailExist=Alumni::where('email',$email)->first();
       if($checkEmailExist != null)
       {
        $request->session()->flash('warning', 'Email Exist Already');
        return back();
    }
       
$token =base64_encode($email);   
$alumni =New Alumni;
$alumni->surname =$surname;
$alumni->name=$name;
$alumni->middleName=$middleName;
$alumni->email =$email;
$alumni->phone = $phone;
$alumni->day_month_of_birth =$day_month_of_birth;
$alumni->sex = $sex;
$alumni->graduation_year =$graduation_year;
$alumni->department = $department;
$alumni->contact_address = $contact_address;
$alumni->state_of_residence = $state_of_residence;
$alumni->country_of_residence = $country_of_residence;
$alumni->status =1;
$alumni->token=$token;
$alumni->degree =$degree;
$alumni->occupation =$request->occupation;
$alumni->save();

$email = strtolower($alumni->email);
$email = preg_replace('/\s+/', '', $email);
$name = $alumni->name;
$subject ='Welcome';
$body ='<p>Welcome, great malabite and malabress , please confirm your email address through the link below.<p><br/>
 <p>clink <a href="https://alumni.unical.edu.ng/verify/'.$token.'" target="_blank">'.$token.'</a><p><br/>
 <p>Thank you</p>';
 
Mail::to($email)->send(new VerifyEmail($body,$name,$subject,$token));
$request->session()->flash('success', 'Registration is successful. Kindly check your email to verify your email account');
return redirect('success')->with('u',$alumni);
    }

    public function success()
    {
        return view('general.success');
    }

    public function updateProfile($token)
    {
    $alumni=Alumni::where('token',$token)->first();
    $d=Department::orderBy('department_name','asc')->get();
    $s=State::orderBy('state_name','asc')->get();
    return view('general.updateAlumni')->with('a',$alumni)->with('d',$d)->with('s',$s);
    }

    public function updatePostProfile(Request $request){
        $this->validate($request, [
            'email' => 'unique:alumnis,email,'.$request->id,
           
        ]);
$checkEmailExist=Alumni::where('id',$request->id)->first();
if($checkEmailExist != null)
{
$checkEmailExist->surname =$request->surname;
$checkEmailExist->name =$request->name;
$checkEmailExist->middleName =$request->middleName;
$checkEmailExist->email =$request->email;
$checkEmailExist->phone =$request->phone;
$checkEmailExist->day_month_of_birth =$request->date;
$checkEmailExist->sex =$request->sex;
$checkEmailExist->graduation_year =$request->yearGraduation;
$checkEmailExist->department =$request->department;
$checkEmailExist->contact_address =$request->contact_address;
$checkEmailExist->state_of_residence =$request->state_of_residence;
$checkEmailExist->country_of_residence =$request->country_of_residence;
$checkEmailExist->occupation =$request->occupation;

$checkEmailExist->save();
$request->session()->flash('success', 'Profile Update is successful');
return redirect('success')->with('u',$checkEmailExist);
}
}


public function verify($token){
    $a =Alumni::where('token',$token)->first();
    if($a==null){
    session()->flash('success', 'token does not exist');   
    }else{
    Alumni::where('id',$a->id)->update(['verify'=>1]); 
 //check if mail has been sent
 $id=1;
 $n_log =NewsLetterLog::where([['alumni_id',$a->id],['newsletter_id',$id]])->first();
 if($n_log == null){ 
$NewsLetter =NewsLetter::find($id);
$body = $NewsLetter->content;
$subject=$NewsLetter->subject;

$email = strtolower($a->email);
$email = preg_replace('/\s+/', '', $email);
$name = $a->name;
Mail::to($email)->send(new UnicalAlumni($body,$name,$subject,$token));
$un_log =new NewsletterLog;
$un_log->alumni_id=$a->id;
$un_log->newsletter_id=$id;
$un_log->save();
session()->flash('success', 'verification is successful. check your mail for the VC welcome message');
 }else{
    session()->flash('success', 'verification is successful');
 }
}
return redirect('success')->with('u',$a);
}

}
