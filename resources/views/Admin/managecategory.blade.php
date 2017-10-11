@extends('layouts.admin.master')
@section('content')
    <!-- Main content -->
    <section class="content"><hr>
<!-- START ALERTS AND CALLOUTS -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Here are the cateories you have </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Category</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
               @foreach($category as $category)
                <tr>
                  <td>{{$category->name}}</td>
                  <td><button class="btn btn-danger btn-sm"><a href="/managecategory/{{$category->id}}" style="color: #fff!important;">Delete</a></button></td>
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