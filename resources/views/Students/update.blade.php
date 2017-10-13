@extends('layouts.student.master')

@section('content')
<!-- Main content -->
<section class="content">

<div class="row">
    <div class="col-md-6 col-md-offset-3">
         <div class="box box-default" style="padding:2em;">
           
                <form class="form-horizontal"  method="post" action="stdedit/{{$learner->id}}" >
                {{csrf_field()}}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
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
                      <input type="text" class="form-control" id="inputName" name="country" placeholder="Nationality"  value="{{ $learner->country }}" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">State</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName"name="state" placeholder="State of Residence"  value="{{ $learner->country }}" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName"name="address" placeholder="Address"  value="{{ $learner->address }}" >
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Education</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" name="education" placeholder="Tell your audience about academic qualification (350max)"  value="{{ $learner->education }}" >{{ $learner->education }}</textarea>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">About</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" name="about" placeholder="Tell your audience about yourself (350max)"  value="{{ $learner->about }}" >{{ $learner->about }}</textarea>
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

        </div>

         <div class="box box-default" style="padding:2em;">
              <form enctype="multipart/form-data" role="form-horizontal" method="post" action="studentupload/{{$learner->id}}">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Update your Profile Picture</label>
                  <input type="file" id="exampleInputFile" name="image">

                  <p class="help-block">Select your Picture.</p>
                </div>
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Set as Profile Picture</button>
              </div>

            </form>
         </div>
        </div>       
    </div>
        <!-- /.col -->
    
      <!-- /.row -->

</section>
    <!-- /.content -->
@endsection