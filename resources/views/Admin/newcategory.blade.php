@extends('layouts.admin.master')
@section('content')
    <!-- Main content -->
    <section class="content"><hr>
<!-- START ALERTS AND CALLOUTS -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add a new Category!</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data"  method='post' action='/newcategory'   role="form-horizontal ">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <input type="text" name="name" class="form-control" id="exampleInput" placeholder="Course Name">
                </div>       
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Add Category</button>
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

 
