@yield("header")

@yield("body")
   
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="w3ls_footer_grid">
			<div class="col-md-6 col-sm-8 col-xs-8 w3ls_footer_grid_left">
				<div class="w3ls_footer_grid_left1">
					<h3>Follow Us</h3>
					<div class="w3ls_footer_grid_left1_pos">
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</a></li>
							<li><a href="#" class="instagram"><i class="fa fa-linkedin f5" aria-hidden="true"></i>Instagram</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-4 col-xs-4 w3ls_footer_grid_right">
				<h2><a href="index.html">tutorials.ng</a></h2>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 w3ls_footer_grid1_left">
			<p>&copy;{{@date('Y')}}  tutorials.ng . All rights reserved | Design by <a href="#">Vivvaa</a></p>
		</div>
		<div class="col-md-6 w3ls_footer_grid1_right">
			<ul>
				
				<li>
					<a href="/blog" class="">Blog</a>
				</li>

				<li>
					<a href="/contact" class="">Contact</a>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //footer -->
<!-- js-scripts -->			
		<!-- js -->
			<script type="text/javascript" src=" {{asset('js/jquery-2.1.4.min.js')}}"></script>
			<script type="text/javascript" src=" {{asset('js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
		<!-- flexSlider -->
				<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
				</script>
						<!-- //flexSlider -->




<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>











						
		<!-- start-smoth-scrolling -->
				<script type="text/javascript" src=" {{asset('js/move-top.js')}}"></script>
				<script type="text/javascript" src=" {{asset('js/easing.js')}}"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		
		<!-- testimonial-plugin -->
		<script src="{{asset('js/mislider.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
					stageHeight: 320,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
					navButtonsOpacity: 1,
				});
			});
		</script>
		<!-- //testimonial-plugin -->
		<!-- for-gallery -->
		<script type="text/javascript" src=" {{asset('js/jquery.hoverdir.js')}}"></script>	
				<script type="text/javascript">
					$(function() {
					
						$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

					});
				</script>
		<!-- for-gallery-rotation -->
			<script src="{{asset('js/modernizr.custom.97074.js')}}"></script>
			<!--swipebox -->	
				<link rel="stylesheet" href="{{ asset('css/swipebox.css')}}">
					<script src=" {{asset('js/jquery.swipebox.min.js')}}"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
				<!-- //swipebox Ends -->
		<!-- //for-gallery-rotation -->
		<!-- //for-gallery -->
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- //smooth scrolling-bottom-to-top -->
		<!-- js for Counter -->
			<script type="text/javascript" src=" {{asset('js/numscroller-1.0.js')}}"></script>
		<!-- /js for Counter -->
<!-- //js-scripts -->
</body>
</html>