<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Learner;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('studentguard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $learner=DB::table('learners')->where('email',Auth::User()->email)->first();
         return view('Students.index',compact('learner'));
     }


    public function profile()
    {
        $learner=DB::table('learners')->where('email',Auth::User()->email)->first();
        return view('Students.profile',compact('learner'));
    }



    public function comment()
    {
        $learner=DB::table('learners')->where('email',Auth::User()->email)->first();
        $comments=DB::table('comments')->where('commented_by',Auth::User()->email)->get();
        return view('Students.activites',compact('comments','learner'));
    }

    public function edit( Request $details, $id=null)
    {
        if($details->isMethod('GET') )
        {
            //get the posts
            $student=DB::table('learners')->where('email',Auth::user()->email)->first();
            $learner=$student;
            return view('Students.update', compact('student','learner'));
        }
        elseif ($details->isMethod('POST')) 
        {
          
           // validate($details, [
           //     'name' => 'required|string|max:70',
           //     'email' => 'required|string|email|max:100|unique:users',
           //     'password' => 'required|string|min:6|confirmed',
           //     'phone' => 'required|string|max:15',
           //     'typeOfUser' => 'required|string',
           //     'school'=>'string|max:150',
           //     'skills'=>'string|max:200',
           //     'gig'=>'string|max:100',
           //     'education'=>'string|max:250',
           //     'about'=>'string|max:250',
           //     'address'=>'string|max:200',
           //     'state'=>'string|max:100',
           //     'country'=>'string|max:100'

           // ]);

                
           $student=DB::table('learners')->where('email',Auth::user()->email)->first();
           $update = learner::findOrFail($student->id);
          
           $update->name= $details->name;
          
           $update->phone= $details->phone;
           $update->about= $details->about;
          
        
           $update->education= $details->education;
           $update->address= $details->address;
           $update->state= $details->state;
           $update->country= $details->country;

           $update->save();
           return back()->with('success','Profile Updated Succssfully');
           
        }
    }

public function upload(Request $request, $id=null){
                
    if($request->hasFile('image'))
    {
    //I saved this guy and then used storage to grab his email 
      $update = learner::findOrFail($id);

      if($update->passport != null)
      {
        Storage::delete($update->passport);
      }

            $name= $request->image->getClientOriginalName();
            $request->image->storeAs('public',$name);
            $imageurl= Storage::url($name);

      
        $update->passport=$imageurl;               
        $update->save();

       

        return back()->with('success','Profile Updated Succssfully');

    }
    else
    {
        return back()->with('error','Select a profile picture');
    }
           
            // return $request->image->extension();
                //return $request->image->path()
                //return $request->image->store("image");
    
                //aliter
    
                //return Storage::putfile('public',$request->file('image'));
                //to use the above add use illuminate\support\Facades\Storage
            
    
}
       
      
    

}
