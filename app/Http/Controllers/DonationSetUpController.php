<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationSetUp;
use Illuminate\Support\Facades\Session;

class DonationSetUpController extends Controller
{
    public function index()
    {
        $a=DonationSetUp::orderBy('amount','desc')->orderBy('currencies','asc')->get();
        return view('donationSetUp.index')->with('a',$a);
    }

 
    public function edit($id)
    {
        $d=DonationSetUp::find($id);
        return view('donationSetUp.edit')->with('a',$d);
    }

    public function delete($id)
    {
        $a=DonationSetUp::destroy($id);
        Session::flash('success', "SUCCESSFUL.");
        return redirect()->action([DonationSetUpController::class, 'index']);
    }

    public function update(Request $request){
               //check if email exist
       $checkEmailExist=DonationSetUp::where('id',$request->id)->first();
       if($checkEmailExist != null)
       {
        $checkEmailExist->amount =$request->amount;
        
$checkEmailExist->save();
return redirect()->action([DonationSetUpController::class, 'index'], ['id' => $request->id]);
       }
    }

public function add(){
           return view('donationSetUp.add');
}

public function store(Request $request)
{
    $DonationSetUp = new DonationSetUp;    
   $DonationSetUp->amount =$request->amount;
$DonationSetUp->currencies =$request->currencies;
 $DonationSetUp->save();
 Session::flash('success', "SUCCESSFUL.");
return redirect()->action([DonationSetUpController::class, 'index']);
}

}
