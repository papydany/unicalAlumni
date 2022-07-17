<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class R {
public function getLga($id){
  $l =DB::table('lgas')->where('id',$id)->first();
  return $l; 
}

public function getState($id){
    $l =DB::table('states')->where('id',$id)->first();
    return $l; 
  }

  public function getDepartment($id){
    $l =DB::table('departments')->where('id',$id)->first();
    return $l; 
  }
}