<?php

namespace App\Imports;

use App\Models\lecture;
use Maatwebsite\Excel\Concerns\ToModel;


class LecturesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new lecture([
            //
            'name' => $row['name'],
            'email' => $row['email'],
        ]);
    }
}
