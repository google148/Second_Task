<?php

namespace App\Http\Controllers;

use App\Models\lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class FormController extends Controller
{
    public function index(Request $request){

        $data ['name']= DB::table('faculties')->
        orderBy('name','asc')->get();
        return view('index', $data);
    }

  
    
    public function insertForm(Request $request){
        
        $lecture = new Lecture();
        
        $lecture->id = $request->id;
        
        $lecture ->name = $request ->name;
        $lecture ->faculty_id= $request ->faculty_id;
        $lecture ->gender = $request ->gender;
        $lecture ->phone = $request ->phone;
        $lecture ->email = $request ->email;
        $lecture ->address = $request ->address; 
        $lecture ->nationality = $request ->nationality;
        $lecture ->dob = $request ->dob;
        
        
        $lecture ->save();
        echo"your data was Submitted Successfully";

    }

    
        public function viewList(Request $request){
            
            $data = lecture::paginate(5);
            return view('list',['lectures'=>$data]);
            //store this data to a single variable
    
            
           // $data = lecture::all(); //here all the data will show to make pagination we will replace 'all' with 'paginate'
            // $data = lecture ::paginate(5);  // this is pagination of 5, it will show the table with only 5 data rows
    
            // return view('list',['lectures'=>$data]);
        }
    
}
