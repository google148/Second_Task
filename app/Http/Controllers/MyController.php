<?php

namespace App\Http\Controllers;

use Excel;

use App\Exports\LecturesExport;
use App\Imports\LecturesImport;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    // public function importExportView(){
    //     return view('import');
    // }

    public function export(Request $request){
        return Excel::download(new LecturesExport, 'lectures.xlsx');
    }

    // public function import(){
    //     Excel::import(new LecturesImport,request()->file('file'));
    // }
}
