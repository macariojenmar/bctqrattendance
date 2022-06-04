<?php

namespace App\Imports;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;
use App\Models\Students;
//use Illuminate\Database\Eloquent\Collection;
//use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Illuminate\Support\Facades\Validator;
HeadingRowFormatter::default('none');

class StudentsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {   
    
        $user = session('LoggedUser');

        $classTitle = Cache::get('classTitle');
        
        foreach ($rows as $row) {

            Students::create([
                'idNum'     => $row['idNum'],
                'name'    => strtoupper($row['name']), 
                'email'    => $row['email'], 
                'guardian'    => $row['guardian'], 
                'guardianemail'    => $row['guardianemail'],
                'user'    => $user,
                'classTitle'    => $classTitle,
                'student'    => $user.''.$row['idNum'].''.$classTitle,
            ]);

        
        }
        /*
        return new Students([

            'idNum'     => $row['idNum'],
            'name'    => strtoupper($row['name']), 
            'email'    => $row['email'], 
            'guardian'    => $row['guardian'], 
            'guardianemail'    => $row['guardianemail'],
            'user'    => $user,
            'classTitle'    => $classTitle,
            'student'    => $user.''.$row['idNum'].''.$classTitle,
            
        ]);
        */
    }
}
