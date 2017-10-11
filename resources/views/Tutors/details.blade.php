<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tutorials.ng| Tutor Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{asset('index2.html')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>t</b>NG</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>tutorials.</b>NG</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          
          <!-- Notifications: style can be found in dropdown.less
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <! inner menu: contains the actual data ->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ $tutor->passport }}" class="user-image" alt="User Image">
              <span class="hidden-xs"> {{ $tutor->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ $tutor->passport }}" class="img-circle" alt="User Image">

                <p>
                {{ $tutor->name }}
                <small>Member since {{ Carbon\Carbon::parse($tutor->created_at)->diffForHumans() }}</small>
                </p>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ $tutor->passport }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{ $tutor->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{$tutor->typeOfUser }}</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">DASHBOARD</li>
        <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- @if($errors->any())
      <div class= "alert alert-danger">
      <ul>
      @foreach($errors->all() as $errors)
      <li>{{$errors}}</li>
      @endforeach
      </ul>
      </div>
      @endif -->

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ $tutor->coverpicture }}" alt="User profile picture">

              <h3 class="profile-username text-center"> {{ $tutor->name }}</h3>

              <p class="text-muted text-center">{{ $tutor->gig }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right"> {{ $tutor->phone }}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"> {{ $tutor->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Sex</b> <a class="pull-right"> {{ $tutor->sex }}</a>
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

              <p class="text-muted">{{ $tutor->education }}</p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted"> {{ $tutor->address }}</p>

              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> State of Residence</strong>

              <p class="text-muted" > {{ $tutor->state }}.</p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Nationality</strong>

              <p class="text-muted" > {{ $tutor->country }}.</p>
              <hr>


              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
               
                <span class="label label-success">{{$tutor->skills}}</span>
               
              </p>
              <hr>
          
              <strong><i class="fa fa-file-text-o margin-r-5"></i>About</strong>
              
              <p class="text-muted" > {{ $tutor->about }}.</p>

            

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#timeline" data-toggle="tab">Activities</a></li>
              <li><a href="#settings" data-toggle="tab">Tutors Recommendation</a></li>
            </ul>
            <div class="tab-content">
              
             <!-- /.tab-pane -->
             <div class=" active tab-pane" id="timeline">
             <!-- The timeline -->
             <ul class="timeline timeline-inverse">
             @if(!$comments->isEmpty())
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

                  <h3 class="timeline-header"><a href="#">{{$comment->commented_by}}</a> commented on your timeline </h3>

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
              <div class="alert alert-info"> No comments on this tutor yet </div>            
           @endif  
              
             </ul>
           </div>
           <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                
            














                
                
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
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Designed by <i class="fa fa-love"></i><a href="https://tutorials.ng">tutorials.ng</a>
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
