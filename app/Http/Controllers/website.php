<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use App\Models\lecture;

class website extends Controller
{
    //
    public function hello(Request $request){

        $data ['name']= DB::table('faculties')->
        orderBy('name','asc')->get();
        return view('form', $data);
    } 

    public function index(Request $request){

        $data ['name']= DB::table('faculties')->
        orderBy('name','asc')->get();
        return view('index', $data);
    } 

     public function getName(Request $request){
        
         $fid=$request->post('fid');
         $lecture_name= DB::table('lectures')->where('faculty_id',$fid)
        ->orderBy('name','asc')->get();
            
            $html='<option value="">Teacher Name</option>';
           
            foreach($lecture_name as $list){
                $html.='<option value="'.$list->id.'">'.$list->name.'</option>';
            }
                echo $html;
        }

        public function getStudentName(Request $request){
        
            $lid=$request->post('lid');
            $student_name= DB::table('students')->where('course_id',$lid)
           ->orderBy('name','asc')->get();
               
               $html='<option value="">Student Name</option>';
              
               foreach($student_name as $list){
                   $html.='<option value="'.$list->id.'">'.$list->name.'</option>';
               }
                   echo $html;
           }
            
        
        
    
}
