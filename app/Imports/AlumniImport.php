<?php

namespace App\Imports;

use App\Models\Alumni;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AlumniImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            
         switch ($row['mob']) {
                case 'January':
                   $mob = 1;
                    break;
                case 'February':
                    $mob = 2;
                    break;
                case 'January':
                    $mob = 3;
                    break;
                case 'February':
                    $mob = 4;
                    break;
                case 'January':
                    $mob = 5;
                    break;
                case 'June':
                    $mob = 6;
                    break;
                case 'July':
                    $mob = 7;
                    break;
                case 'August':
                    $mob = 8;
                    break;
                case 'September':
                    $mob = 9;
                    break;
                case 'October':
                    $mob = 10;
                    break;
                case 'November':
                    $mob = 11;
                    break;
                case 'December':
                    $mob = 12;
                    break;
                
                default:
                $mob = 0;
                    break;
            }
            $dob =$row['dob'].'-'.$mob;
            $alumni =Alumni::where('email',$row['email'])->first();
            if($alumni == null){
            Alumni::create([
                'name' => $row['firstname'],
                'middleName' => $row['middlename'],
                'surname' => $row['lastname'],
                'phone' => trim($row['phone']),
                'email' => strtolower($row['email']),
                'department' => $row['department'],
                'sex' => $row['sex'],
                'matric_number' => $row['matnumber'],
                'day_month_of_birth' => $dob,
                'graduation_year' => $row['yearofgraduation'],
                'contact_address' => $row['contactaddress'],
                'degree' => $row['degree'],
                'occupation' => $row['occupation'],
                
            ]);
        }
        }
    }
}
