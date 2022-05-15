<?php

namespace App\Exports;

use App\Models\lecture;
use Maatwebsite\Excel\Concerns\FromCollection;

class LecturesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lecture::all();
    }
}
