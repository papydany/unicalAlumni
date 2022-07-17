<?php

namespace App\Http\Controllers;
use App\Imports\AlumniImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ImportController extends Controller
{

    public function index(){
        return view('import.index');
    }
    public function importAlumni(Request $request) 
    {
        $errors=array();
        if($request->file('file'))
        {
            
            try {
        $path = $request->file('file');
        Excel::import(new AlumniImport($request->all()), $path);
        return redirect('bulkImport')->with('warning', 'Successful!');
      } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
        $failures = $e->failures();
        
        foreach ($failures as $failure) {
            $failure->row(); // row that went wrong
            $failure->attribute(); // either heading key (if using heading row concern) or column index
          $errors[] =  $failure->errors(); // Actual error messages from Laravel validator
            $failure->values(); // The values of the row that has failed.
        }
        dd($errors);
    }
}
    }
}
