<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class StudentController extends Controller
{
    public function index(){

        $student   = Student::all();
        //return $employment;
        return view('studentList',['student' => $student]);
       
        
      
    }

    public function edit($id){

      

        $student   = Student::with('subject')->FindorFail($id);
        return view('studentupdate',['student' => $student]);
       
    }

    public function form(){

        
        return view('student');
      
    }

    public function manage(request $request){
        


            if($request->input('student_id')) {
                $student = Student::FindorFail($request->input('student_id'));
                $subject = Subject::FindorFail($request->input('subject_id'));
                
                $msg = "Student updated successfully";
            }else{
                $student = new Student();
                $subject = new Subject();
               
                $msg = "Student created successfully";
            }

        
            $student->name    =  $request->input('name');
            $student->email   =  $request->input('email');
            $student->phone   =  $request->input('phone');
            $student->address =  $request->input('address');
            $student->city    =  $request->input('city');
            $student->state   =  $request->input('state');
            $student->country =  $request->input('country');
            $student->status  =  $request->input('status'); 


            $subject->name   =  $request->input('subject_name');
            $subject->mark   =  $request->input('subject_mark');
            $subject->grade  =  $request->input('subject_grade');

            //$subject = $this->getSubjectsObject($request);
            
             DB::transaction(function () use($student,$subject) {
                $student->save();
                $student->subject()->save($subject);
            }); 


            return  redirect()->route('home'); 
         

      
    }


    public function updateStatus(request $request){
        

        if($request->input('id')) {
            $Student = Student::FindorFail($request->input('id'));
            $Student->status  = $request->input('status');
            $Student->save();
            
        }
           

      
    }



    public function destroy(request $request){
        
      

            $Student = Student::findOrFail($request->input('id'));
            $Student->delete();
           return true;
            

       

    }



    public function getSubjectsObject(Request $request){
        
        $action   = Str::lower($request->input('action'));

        if($action == 'update') {
            $data= array();
            foreach($request->input('subject') as $key=>$item){
                $subject = Subject::FindorFail($item['id']);
                $subject->name          = $item['name'];
                $subject->mark          = $item['mark'];
                $subject->grade         = $item['grade'];
                
                
                $data[] = $subject;
                
            }

            return $data;

        }else{

            $data= array();
            foreach($request->input('subject') as $key=>$item){
                $data[] = new Subject([
                    'name'       => $item['name'],
                    'mark'       => $item['mark'],
                    'grade'      => $item['grade'],
                ]);
                
            }

            return $data;
        }

    }
}
