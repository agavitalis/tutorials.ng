@section("header")

    @include("partials.general.indexheader")

@endsection

@extends("layouts.general.master")

@section("body")

   <!-- Team/Tutors -->
<!-- <div class="team" id="faculties">
	<div class="container">
		<h3 class="tittle-w3l tut">Top Featured Tutors</h3>
		<h5 class="tittle-w3l">Our Tutors are hand-picked experts,best in their various fields</h5>
		<div class="agile_banner_bottom_grids">
		@foreach($tutors as $tutor)
			<div class="col-md-3 col-sm-3 col-xs-3 agile_banner_bottom_grid">
				<div class="w3layouts_banner_bottom_grid">
					<img src="{{ $tutor->passport }}" alt=" " class="img-responsive" />
					<div class="w3layouts_banner_bottom_grid_pos">
						<p>tNG Name:Vita@tng</p>
						<p>Location:{{$tutor->state}}</p>						
					</div>
				</div>
				<h4>English Tutor --- <span>{{$tutor->name}}</span></h4>
				<p>We make the fit.</p>
				<div class="social-bnr-agileits">
				<ul>
					<li><a href="/details/{{$tutor->email}}"><button>Details &nbsp<i class="fa fa-eye" aria-hidden="true"></i></button></a></li>			
				</ul>
				</div>
			</div>
		@endforeach

		{{$tutors->links()}}
			
		</div>
	</div>
</div> -->





<div class="team" id="faculties">
	<div class="container">
		<h3 class="tittle-w3l tut">Top Featured Tutors</h3>
		<h5 class="tittle-w3l">Our Tutors are hand-picked experts,best in their various fields</h5>
	@if($tutors != null)
	<ul id="flexiselDemo1">	
		@foreach($tutors as $tutor)
		<li>
			<div class="w3layouts_banner_bottom_left">
				<div class="w3layouts_banner_bottom_grid">
					<img src="{{ $tutor->passport }}" alt=" " class="img-responsive" />
					<div class="w3layouts_banner_bottom_grid_pos">
						<p>tNG Name:Vita@tng</p>
						<p>Location:{{$tutor->state}}</p>						
					</div>
				</div>
				<h4>Web Development--- <span>{{$tutor->name}}</span></h4>
				<p>I will teach you website development from scratch.</p>
				<div class=" eme social-bnr-agileits">
				<ul>
					<li><a href="/details/{{$tutor->email}}"><button>Details &nbsp<i class="fa fa-eye" aria-hidden="true"></i></button></a></li>			
				</ul>
			</div>
			</div>	
		</li>
		@endforeach
	</ul>
	@endif
</div>
</div>


<!-- About -->
<div class="about" id="about">
	<div class="container">
		<h3 class="tittle-w3l">About Us</h3>
		<div class="col-md-6 agileinfo_banner_bottom_right">
			<div class="agileinfo_banner_bottom_right1">	
				<h3>Signup as a Tutor Now!</h3>
				<div class="agileinfo_banner_bottom_right1_grid o1">
					<form action="{{ route('register') }}" method="post">	
						{{ csrf_field() }}	
						<input  name="typeOfUser" type="hidden" value="tutor">
						<input type="text" name="name" placeholder="Name"  value="{{ old('name') }}" required="">

						@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif

							<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required="">
							@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
							@endif

							<input type="tel" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required="">
							@if ($errors->has('phone'))
									<span class="help-block">
										<strong>{{ $errors->first('phone') }}</strong>
									</span>
							@endif

							<input type="password" name="password" placeholder="Password"  required="">
							@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
							@endif
							
							<input type="password" name="password_confirmation" placeholder="Confirm Password"  required="">
							
						<input type="submit" value="Register Me">
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6 agileinfo_banner_bottom_left">
			<h3>How Tutorials.ng Works</h3>
			<p>Tutorials.ng is a free platform that links Experts(Tutors) and Apprentise(Students),We are not 
			restricted to only academics, our platform is free for all who have what to teach, and also for all who wants
			to find a tutor in his/her field. We believe that some concepts are better understood when been taught on a one and one basis
			and we believe that there are a million people out there willing to extend a helping hand.
			Join us now as a student or a tutor as we help you achieve your dreams  .</p>
			<ul>
				<li><i class="fa fa-search" aria-hidden="true"></i><p> Search for your prefered tutor using our search, view peoples comment 
					and check if the tutor is verified </p></li>
				<li><i class="fa fa-book" aria-hidden="true"></i><p>Book an appointment with him/her at your convinence </p></li>
				<li><i class="fa fa-wechat" aria-hidden="true"></i><p>Then comment on his services to help other receive better services and help him/her serve others better</p></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //About -->
<div class="team" id="faculties">
	<div class="container">
		<h3 class="tittle-w3l tut">Most Searched Categories</h3>
		<h5 class="tittle-w3l">See What Other are Learning,Dont be left behind</h5>
		@if($courses != null)
		<div class="agile_banner_bottom_grids">
		@foreach($courses as $course)
		<div class="col-md-3 col-sm-3 col-xs-3 agile_banner_bottom_grid">
			<div class="w3layouts_banner_bottom_grid">
				<img src="{{$course->picture}}" alt=" " class="img-responsive" />
				<div class="w3layouts_banner_bottom_grid_pos">
					<p>{{$course->coursename}}</p>
					<div class="social-bnr-agileits">
						<ul>
							<li><a href="/view/{{$course->id}}"><button>View<i class="fa fa-eye" aria-hidden="true"></i></button></a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		{{$courses->links()}}	
		</div>
		@endif
	</div>
</div>
<!-- services -->
<div class="services" id="services">
	<div class="container">
		<h3 class="tittle-w3l mod tut ">We also Offer</h3>
		<h5 class="tittle-w3l">All for Free!!!</h5>
		<div class="w3-services-grids">
			<div class="col-md-4 col-sm-4  w3l-services-grid">
				<div class="w3ls-services-img">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				</div>
				<div class="agileits-services-info">
					<h4>CBT tests</h4>
					<p>Are you preparing for exams, try out our free CBT tests and convince yourself you are really ready for that exams. </p>
					<button><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Take a Test</button>
				</div>

			</div>
			<div class="col-md-4 col-sm-4 w3l-services-grid">
				<div class="w3ls-services-img">
					<i class="fa fa-globe" aria-hidden="true"></i>
				</div>
				<div class="agileits-services-info">
					<h4>Online Courses</h4>
					<p>Our excellent online courses keeps you on the track, learing is now easy, Learn fast and also at your convinence. </p>
					<button><i class="fa fa-eye" aria-hidden="true"></i>View Courses</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-4  w3l-services-grid">
				<div class="w3ls-services-img">
					<i class="fa fa-leanpub" aria-hidden="true"></i>
				</div>
				<div class="agileits-services-info">
					<h4>PastQuestions</h4>
					<p>Exams are easily prepared with past questions, we get you covered, we have past questions in various fields all for your consumption  </p>
					<button><i class="fa fa-eye" aria-hidden="true"></i>View PastQuestions</button>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //services -->


<!-- newsletter -->
<div class="newsletter">
	<div class="container">
		<h3 class="tittle-w3l mod">Newsletter</h3>
		<p class="nunc nunc1">Shee.. dont tell anyone, subscribe and receive updates right at your inbox</p>
		<form action="#" method="post">
			<input type="email" name="email" placeholder="Your email..." required="">
			<input type="submit" value="Subscribe Now">
		</form>
	</div>
</div>
<!-- //newsletter -->
<!-- testimonials -->
<div class="testimonials">
	<div class="container">
	<h3 class="tittle-w3l mod">top featureed testimonials</h3>
		<div class="mis-stage"> 
			<!-- The element to select and apply miSlider to - the class is optional -->
			<ol class="mis-slider">
				<!-- The slider element - the class is optional -->
				<li class="mis-slide"> 
				<!-- A slide element - the class is optional --> 
					<a href="#" class="mis-container"> 
					<!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
					<figure> 
					<!-- Slide content - whatever you want --> 
					<img src="images/dera.jpg" alt=" " class="img-responsive" />
					<figcaption>Chidera Ojiaku<span>Excellence is not being the best; it is doing your best, Join tNG and thank me later.</span></figcaption>
					</figure>
					</a> </li>
				<li class="mis-slide"> <a href="#" class="mis-container">
					<figure> <img src="images/xty.jpg" alt=" " class="img-responsive" />
					<figcaption>Christiana Ifeanyichuku<span>Tutorials.ng is really the best learnig ever, they have it all.</span></figcaption>
					</figure>
					</a> </li>
				<li class="mis-slide"> <a href="link" class="mis-container">
					<figure> <img src="images/buky.jpg" alt=" " class="img-responsive" />
					<figcaption>Engr.Ebuka Ohagwu<span>Only he who can see the invisible can do the impossible. Kudoes to tutorials.ng</span></figcaption>
					</figure>
					</a> </li>
				<li class="mis-slide"> <a href="#" class="mis-container">
					<figure> <img src="images/jane.jpg" alt=" " class="img-responsive" />
					<figcaption>Udoka Jane<span>Education is our passport to the furture, for tomorrow belongs to the people who prepare for it today.Thanks to tutorials.ng</span></figcaption>
					</figure>
					</a> </li>
				<li class="mis-slide"> <a href="#" class="mis-container">
					<figure> <img src="images/vita.jpg" alt=" " class="img-responsive" />
					<figcaption>Ogbonna Vitalis<span>I cant believe it, A student just called me, boom I became a private tutor.</span></figcaption>
					</figure>
					</a> </li>
				<li class="mis-slide"> <a href="#" class="mis-container">
					<figure> <img src="images/mike.jpg" alt=" " class="img-responsive" />
					<figcaption>Ugwu Micheal<span>Tutorial.ng,, I made money from all that I have been learning, tutorials.ng all the way.</span></figcaption>
					</figure>
					</a> </li>
			</ol>
		</div>
	</div>
</div>
<!-- //testimonials -->


@endsection