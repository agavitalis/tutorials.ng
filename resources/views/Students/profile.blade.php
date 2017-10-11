@extends('layouts.student.master')

@section('content')
<!-- Main content -->
<section class="content">

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ Auth::user()->coverpicture }}" alt="User profile picture">

              <h3 class="profile-username text-center"> {{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">{{ Auth::user()->gig }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right"> {{ Auth::user()->phone }}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"> {{ Auth::user()->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Sex</b> <a class="pull-right"> {{ Auth::user()->sex }}</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Verified Account</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">{{ Auth::user()->education }}</p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted"> {{ Auth::user()->address }}</p>

              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> State of Residence</strong>

              <p class="text-muted" > {{ Auth::user()->state }}.</p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Nationality</strong>

              <p class="text-muted" > {{ Auth::user()->country }}.</p>
              <hr>


              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
               
                <span class="label label-success">{{Auth::user()->skills}}</span>
               
              </p>
              <hr>
          
              <strong><i class="fa fa-file-text-o margin-r-5"></i>About</strong>
              
              <p class="text-muted" > {{ Auth::user()->about }}.</p>

            

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#timeline" data-toggle="tab">Activity</a></li>
              <li><a href="#settings" data-toggle="tab">Update Profile</a></li>
            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
              <div class=" active tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                @if($comments != null)
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

               
               @else
                 <div class="alert alert-info"> You have not yet rated or commented on a tutor </div>

               
              @endif  
                 
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal"  method="post" action="{{url('/stdedit@Auth::user()->id')}}" >
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="{{ Auth::user()->email }}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName"  name="phone" placeholder="Name"  value="{{ Auth::user()->phone }}" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nationality</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="country" placeholder="Nationality"  value="{{ Auth::user()->phone }}" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">State</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName"name="state" placeholder="State of Residence"  value="{{ Auth::user()->phone }}" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName"name="address" placeholder="Address"  value="{{ Auth::user()->phone }}" >
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Education</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" name="education" placeholder="Tell your audience about academic qualification (350max)"  value="{{ Auth::user()->phone }}" ></textarea>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">About</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" name="about" placeholder="Tell your audience about yourself (350max)"  value="{{ Auth::user()->phone }}" ></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" name="skills" placeholder="Skills"  value="{{ Auth::user()->skills }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Update My Profile</button>
                    </div>
                  </div>
                </form>




              <form role="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Want to Change Cover or Profile Picture</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Select your Picture.</p>
                </div>
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Set as Cover Picture</button>
                <button type="submit" class="btn btn-primary">Set as Profile Picture</button>
              </div>

            </form>

        </div>
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
    @endsection