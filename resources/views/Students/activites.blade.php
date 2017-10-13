@extends('layouts.student.master')

@section('content')
<!-- Main content -->
<section class="content">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
         
            
            
      
         @if(!$comments->isEmpty())
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
               
                  @foreach($comments as $comment)
                 <!-- timeline time label -->
                 <li class="time-label">
                       <span class="bg-red">
                       {{ $comment->created_at }}
                       </span>
                 </li>
                 <!-- /.timeline-label -->
                 <!-- timeline item -->
                 <li>
                   <i class="fa fa-envelope bg-blue"></i>

                   <div class="timeline-item">
                     <span class="time"><i class="fa fa-clock-o"></i>  {{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>

                     <h3 class="timeline-header"><a href="#">{{$comment->commented_for}}</a>   You commented </h3>

                     <div class="timeline-body">
                       {{$comment->comment}}
                     </div>
                     <div class="timeline-footer">
                       <a class="btn btn-danger btn-xs">Delete</a>
                     </div>
                   </div>
                 </li>

                   
                   @endforeach
                   </ul>
                 @endif  

                 
               @if($comments->isEmpty())
               <div class="box-body">
               <div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h4><i class="icon fa fa-ban"></i> {{ Auth::user()->name }}</h4>
                You have no activities yet
               </div>
              
              </div>
              @endif  
             
                 
               
              
             

            
              
             
        </div>
        <!-- /.col -->
    </div>
      <!-- /.row -->

</section>
    <!-- /.content -->
    @endsection