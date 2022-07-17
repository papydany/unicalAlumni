<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Department;
use App\Models\State;
use App\Models\DonationSetUp;

class AlumniController extends Controller
{
    public function index()
    {
        $a=Alumni::orderBy('id','desc')->paginate(100);
        return view('alumni.index')->with('a',$a);
    }

    public function detail($id)
    {
        $d=Alumni::find($id);
        return view('alumni.detail')->with('d',$d);
    }
    public function edit($id)
    {
        $d=Alumni::find($id);
        $dep=Department::orderBy('department_name','asc')->get();
        $s=State::orderBy('state_name','asc')->get();
        return view('alumni.edit')->with('d',$d)->with('dep',$dep)->with('s',$s);
    }

    public function delete()
    {
        $a=Alumni::orderBy('id','desc')->paginate(500);
        return view('alumni.index')->with('a',$a);
    }

    public function update(Request $request){
               //check if email exist
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
$checkEmailExist->matric_number =$request->matricNumber;
$checkEmailExist->graduation_year =$request->yearGraduation;
$checkEmailExist->department =$request->department;
$checkEmailExist->state_of_origin =$request->stateOfOrigin;
$checkEmailExist->lga_of_origin =$request->lgaOfOrigin;
$checkEmailExist->contact_address =$request->contact_address;
$checkEmailExist->state_of_residence =$request->state_of_residence;
$checkEmailExist->country_of_residence =$request->country_of_residence;
$checkEmailExist->occupation =$request->occupation;

$checkEmailExist->save();
return redirect()->action([AlumniController::class, 'detail'], ['id' => $request->id]);
       }
    }

public function add(){
    $dep=Department::orderBy('department_name','asc')->get();
        $s=State::orderBy('state_name','asc')->get();
        return view('alumni.add')->with('dep',$dep)->with('s',$s);
}

public function store(Request $request)
{
   $surname =$request->surname;
   $name =$request->name;
   $email =$request->email;
   $phone =$request->phone;
   $day_month_of_birth =$request->date;
   $sex =$request->sex;
   $student_number =$request->matricNumber;
   $graduation_year =$request->yearGraduation;
   $department =$request->department;
   $state_of_origin =$request->stateOfOrigin;
   $lga_of_origin =$request->lgaOfOrigin;
   $contact_address =$request->contact_address;
   $state_of_residence =$request->state_of_residence;
   $country_of_residence =$request->country_of_residence;
// check matric number
$checkNumberExist=Alumni::where('matric_number',$student_number)->first();
if($checkNumberExist != null){
$request->session()->flash('warning', 'Matric Number Exist Already');
return back();
}
   //check if email exist
   $checkEmailExist=Alumni::where('email',$email)->first();
   if($checkEmailExist != null)
   {
    $request->session()->flash('warning', 'Email Exist Already');
    return back();
   }

$alumni =New Alumni;
$alumni->surname =$surname;
$alumni->name=$name;
$alumni->middleName=$request->middleName;
$alumni->email =$email;
$alumni->phone = $phone;
$alumni->day_month_of_birth =$day_month_of_birth;
$alumni->sex = $sex;
$alumni->matric_number = $student_number;
$alumni->graduation_year =$graduation_year;
$alumni->department = $department;
$alumni->state_of_origin =$state_of_origin;
$alumni->lga_of_origin =$lga_of_origin;
$alumni->contact_address = $contact_address;
$alumni->state_of_residence = $state_of_residence;
$alumni->country_of_residence = $country_of_residence;
$alumni->occupation = $request->occupation;
$alumni->status=0;
$alumni->save();
return redirect()->action([AlumniController::class, 'detail'], ['id' => $alumni->id]);
}

public function donation()
{
//$a=DonationSetUp::get();
    return view('alumni.donation');
}

public function postDonation(Request $request){
$alumni =Alumni::where('email',$request->email)->first();
if($alumni != null){
return view('payment.index')->with('a',$alumni);
}else{

}
}

}
