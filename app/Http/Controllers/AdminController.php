<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\DB;
use App\course;
use App\category;
use App\location;
class AdminController extends Controller
{
    public function dashboard(){

        return view('admin.dashboard');
    }


    public function newcourse(Request $request){
        
        if($request->isMethod('GET'))
        {
            return view('admin.newcourse');
        }
        elseif($request->isMethod('POST'))
        {
            //dd($request);
            if($request->hasFile('image'))
            {
            //I saved this guy with his original name
                    $name= $request->image->getClientOriginalName();
                    $request->image->storeAs('public',$name);
                $imageurl= Storage::url($name);

            $course= new course();
            $course->coursename=$request->coursename;
            $course->coursedetails=$request->coursedetails;
            $course->picture=$imageurl;
    

            $course->save();
                return back()->with('success','Course Successfully Added.');
            }
            else
            {
                return back()->with('error',' Your Course Must Have an Image Discription.');
            }
        }
    }



    public function managecourse( Request $request){
        if($request->isMethod('GET'))
        {
            //get the posts
            $courses=DB::table('courses')->get();
            return view('admin.managecourse', compact('courses'));
        }
       
    
    }

     public function updatecourse( Request $request, $id){
        if($request->isMethod('GET') )
        {
            //get the posts
            $course=DB::table('courses')->where('id',$id)->first();
            return view('admin.updatecourse', compact('course'));
        }
        elseif ($request->isMethod('POST')) 
        {
           
          //$post=DB::table('posts')->where('id',$id)->first();
         //it will work,if I used get() to retrieve the post

          $course = course::findOrFail($id);
          //dd($post);
          $course->coursename=$request->coursename;
          $course->coursedetails=$request->coursedetails;
          $course->update();
          if($request->hasFile('image'))
          {
          //delete the old guy andsave the new one
          Storage::delete($course->picture);


              $name= $request->image->getClientOriginalName();
              $request->image->storeAs('public',$name);
              $imageurl= Storage::url($name);

              $course->picture = $imageurl;
              $course->update();

          }
          return back()->with('success','Course succefully updated');
        
        }

}

 public function deletecourse($id){

        $delete=course::findOrFail($id);
        Storage::delete($delete->picture);
        $delete->delete();

        return back()->with('success','Course Successfully Deleted');
}

public function newcategory(Request $request){
    
    if($request->isMethod('GET'))
    {
        return view('admin.newcategory');
    }
    elseif($request->isMethod('POST'))
    {
        //dd($request);
       
        $category= new category();
        $category->name=$request->name;
        $category->save();

        return back()->with('success','category Successfully Added.');
       
    }
}

public function managecategory($id=null){
    if($id==null)
    {
        //get the category
        $category=DB::table('categories')->get();
        return view('admin.managecategory', compact('category'));
    }
    elseif($id !=null )
    {
        $delete=category::findOrFail($id);
        $delete->delete();

        return back()->with('success','Category Successfully Deleted');
    }

}


public function newlocation(Request $request){
    
    if($request->isMethod('GET'))
    {
        return view('admin.newlocation');
    }
    elseif($request->isMethod('POST'))
    {
        //dd($request);
       
        $location= new location();
        $location->name=$request->name;
        $location->save();

        return back()->with('success','Location Successfully Added.');
       
    }
}

public function managelocation($id=null){
    if($id==null)
    {
        //get the category
        $location=DB::table('locations')->get();
        return view('admin.managelocation', compact('location'));
    }
    elseif($id !=null )
    {
        $delete=location::findOrFail($id);
        $delete->delete();

        return back()->with('success','Location Successfully Deleted');
    }

}








}
