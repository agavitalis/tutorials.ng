<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<title>Tutorials.ng</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tutorials, Classes, Extra Classes" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="{{ asset('css/flexslider.css')}}" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->
<link href="{{ asset('css/mislider.css')}}" rel="stylesheet" type="text/css" /> <!-- Testimonials-CSS -->
<link href="{{ asset('css/mislider-custom.css')}}" rel="stylesheet" type="text/css" /> <!-- Testimonials-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Athiti:200,300,400,500,600,700&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body> 
<!-- banner -->
<div class="main-agile">
	<div class="banner">
		<div class="container">
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<h1><a class="navbar-brand" href="/">tutorials.ng<span>linking you to the bests</span></a></h1>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<!-- <ul class="nav navbar-nav">
							<li><a href="login" class=""><i class="fa fa-sign-in" aria-hidden="true"></i>Signin  </a></li>
							<li><a href="register" class=""><i class="fa fa-user-plus" aria-hidden="true"></i>Signup</a></li>
						</ul> -->
							 <!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        <li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i>Blog</a></li>
                        @guest
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Signin</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Signup</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
									<li><a href="{{ route('stdprofile') }}"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</li>
								
                                </ul>
                            </li>
                        @endguest
                    </ul>

						<div class="clearfix"> </div>							
					</div>	
					</div>
				</nav>		
			</div>
			<div class="w3l_banner_info">
				<section class="slider">
					<div class="flexslider ">
						<ul class="slides">
							<li>
								<div class="wthree_banner_info_grid">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<h3>In need of expert tutors? find expert tutors near you</h3>
									<h5>are you a tutor? register now and get contacted</h5>
									<p>improve your skills,learn and understand better at your own pace,from basics education to industry  specfic skills</p>
								</div>
							</li>
							
						</ul>
					</div>
				</section>
			</div>
			<div class="tutor-search row">
					<form class="form-inline" action="/search" method="post">
						{{ csrf_field() }}

						<div class="form-group col-md-4 col-sm-4">
						<select class="form-control" >
							<option>I need a tutor/teacher in</option>
							@if($allcourses != null)
							@foreach($allcourses as $allcourse)
							<option value="{{$allcourse->coursename}}">{{$allcourse->coursename}}</option>
							@endforeach
							@endif
						</select>
					</div>
					<div class="form-group col-md-2 col-sm-2">
						<select class="form-control" name="category" >
						<option value="0" >Category</option>
						@if($categories != null)
							@foreach($categories as $category)							
							<option value="{{$category->name}}" >{{$category->name}}</option>
							@endforeach
						@endif
						</select>
					</div>
					<div class="form-group col-md-2 col-sm-2">
						<select class="btn-group bootstrap-select form-control">
							<option>Location</option>
						@if($locations != null)
							@foreach($locations as $location)	
							<option value="{{$location->name}}" >{{$location->name}}</option>
							@endforeach
						@endif
						</select>
					</div>
						<div class="form-group col-md-3 col-sm-3">
						<button><i class="fa fa-search" aria-hidden="true"></i>Search For a Tutor</button>
						</div>
						
					</form>
			</div>


		</div>
	</div>
	<!-- //banner -->
</div>
