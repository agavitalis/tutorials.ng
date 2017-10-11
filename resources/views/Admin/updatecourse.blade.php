@extends('layouts.admin.master')
@section('content')
    <!-- Main content -->
    <section class="content"><hr>
<!-- START ALERTS AND CALLOUTS -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update a Course!</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data"  method='post' action='/updatecourse/{{$course->id}} '   role="form-horizontal ">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Course name</label>
                  <input type="text" name="coursename" class="form-control" id="exampleInput" placeholder="Post Title" value="{{$course->coursename}}">
                </div>
               
                <div class="form-group">
                  <label for="exampleInputPassword1">Discription</label>
                  <textarea class="form-control" name="coursedetails" rows="3" placeholder="Body...">{{$course->coursedetails}}</textarea >
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Post Thumbmail</label>
                    <input type="file"  class="form-control"id="exampleInputFile" name="image" value="{{$course->picture}}">
                  <p class="help-block">A picture to illustrate.</p>
                </div>
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>


            
          </div>
          <!-- /.box -->
        </div>

       
        <!-- /.col -->
      </div>
      <!-- /.row -->
     
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

 
