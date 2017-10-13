<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function index(){

        $tutors=DB::table('tutors')->paginate(20);
        //$tutors=DB::table('tutors')->paginate(20);
        $courses=DB::table('courses')->paginate(8);
        //forsearch
        $allcourses=DB::table('courses')->get();
        //allcategiries
        $categories=DB::table('categories')->get();

        $locations=DB::table('locations')->get();

        return view('General.index',compact('tutors','courses','allcourses','categories','locations'));
       
    }

    public function contactus(){
        $tutors=DB::table('users')->where('typeOfUser','tutor')->paginate(20);
        //$tutors=DB::table('tutors')->paginate(20);
        $courses=DB::table('courses')->paginate(8);
        //forsearch
        $allcourses=DB::table('courses')->get();
        //allcategiries
        $categories=DB::table('categories')->get();

        $locations=DB::table('locations')->get();
        return view('General.contact',compact('allcourses','categories','locations'));
    }

     public function search(){

        $tutors=DB::table('users')->where('typeOfUser','tutor')->paginate(20);
        //$tutors=DB::table('tutors')->paginate(20);
        $courses=DB::table('courses')->paginate(8);
        //forsearch
        $allcourses=DB::table('courses')->get();
        //allcategiries
        $categories=DB::table('categories')->get();

        $locations=DB::table('locations')->get();
        //dd($tutors);
        return view('General.search',compact('tutors','courses','allcourses'));
        
    }


    public function view($id){
        
                $courses=DB::table('courses')->where('id',$id)->first();
                $tutors=DB::table('users')->where('typeOfUser','tutor')->paginate(20);
               
    
                //forsearch
                $allcourses=DB::table('courses')->get();
                //allcategiries
                $categories=DB::table('categories')->get();
        
                $locations=DB::table('locations')->get();
               
                //dd($tutors);
                return view('General.view',compact('tutors','courses','allcourses','categories','locations'));
                
            }
}
