@extends('layouts.admin.master')
@section('content')
    <!-- Main content -->
    <section class="content"><hr>
<!-- START ALERTS AND CALLOUTS -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add a new Course!</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data"  method='post' action='/newcourse '   role="form-horizontal ">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Course Name</label>
                  <input type="text" name="coursename" class="form-control" id="exampleInput" placeholder="Course Name">
                </div>
            
                <div class="form-group">
                  <label for="exampleInputPassword1">Article</label>
                  <textarea class="form-control" name="coursedetails" rows="3" placeholder="A brief article about this course"></textarea>
                </div>
            
                <div class="form-group">
                  <label for="exampleInputFile">Course Thumbmail(200x300)</label>
                    <input type="file" id="exampleInputFile" name="image">
                  <p class="help-block">A picture to illustrate.</p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
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

 
