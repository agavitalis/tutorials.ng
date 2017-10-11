@extends('layouts.admin.master')
@section('content')
    <!-- Main content -->
    <section class="content"><hr>
<!-- START ALERTS AND CALLOUTS -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Here are your courses </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Course Name</th>
                  <th>Details</th>
                  <th>Picture</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
               @foreach($courses as $course)
                <tr>
                  <td>{{$course->coursename}}</td>
                  <td>{{$course->coursedetails}}</td>
                  <td><img src="{{$course->picture}}" alt="" height="120" width="200"></td>
                  <td><button class="btn btn-success btn-sm"><a href="/updatecourse/{{$course->id}}" style="color : #fff!important;">update</a></button></td>
                  <td><button class="btn btn-danger btn-sm"><a href="/deletecourse/{{$course->id}}" style="color: #fff!important;">Delete</a></button></td>
                </tr>
                @endforeach
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
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