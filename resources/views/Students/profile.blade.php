@extends('layouts.student.master')

@section('content')
<!-- Main content -->
<section class="content">

      <div class="row">

      <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i>Update Profile!</h4>
               Please Update your profile >> and get a hug
        </div>
        <div class="col-md-6 col-md-offset-3">

          <!-- Profile Image -->
          <div class="box box-info">
            <div class="box-body box-profile">
              @if($learner->passport != null)
              <img class="profile-user-img img-responsive img-circle" src="{{ $learner->passport }}" alt="cover picture">
              @else
              <img class="profile-user-img img-responsive img-circle" src="images/default.png" alt="cover picture">
              @endif
              <h3 class="profile-username text-center"> {{ Auth::user()->name }}</h3>


              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right"> {{ Auth::user()->phone }}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"> {{ Auth::user()->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>I am a</b> <a class="pull-right"> {{ Auth::user()->typeOfUser }}</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-8 col-md-offset-2">
          <!-- About Me Box -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">{{$learner->education }}</p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted"> {{ $learner->address }}</p>

              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> State of Residence</strong>

              <p class="text-muted" > {{ $learner->state }}.</p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Nationality</strong>

              <p class="text-muted" > {{$learner->country }}.</p>
              <hr>
          
              <strong><i class="fa fa-file-text-o margin-r-5"></i>About</strong>
              
              <p class="text-muted" > {{ $learner->about }}.</p>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
        <!-- /.col -->
    </div>
      <!-- /.row -->

</section>
    <!-- /.content -->
    @endsection