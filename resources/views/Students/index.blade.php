@extends('layouts.student.master')

@section('content')

<!-- Main content -->
<section class="content">
     
      <!-- START ALERTS AND CALLOUTS -->

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-warning"></i>

              <h3 class="box-title">Welcome!!</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> {{ Auth::user()->name }}</h4>
               Welcome to Tutoials.ng, We are glad to have you on board!
              </div>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END ALERTS AND CALLOUTS -->

    </section>
    <!-- /.content -->

@endsection