<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<?php include("mainhead.php"); ?>
	
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include("navs.php"); ?>
	

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contact Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hello!</h2>
					<h3>May 28th, 2017</h3>
					<p>We invited you to celebrate our wedding</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/groom.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Garry Perez</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/bride.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Kristel Benneth Tiquio</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		// Function to get the client IP address
		function get_client_ip() {
		    $ipaddress = '';
		    if (isset($_SERVER['HTTP_CLIENT_IP']))
		        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    else if(isset($_SERVER['HTTP_X_FORWARDED']))
		        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		    else if(isset($_SERVER['HTTP_FORWARDED']))
		        $ipaddress = $_SERVER['HTTP_FORWARDED'];
		    else if(isset($_SERVER['REMOTE_ADDR']))
		        $ipaddress = $_SERVER['REMOTE_ADDR'];
		    else
		        $ipaddress = 'UNKNOWN';
		    return $ipaddress;
		} 
	?> 

	<div class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
					<h3>Get In Touch</h3>
					<form onsubmit="event.preventDefault();" id="mymailer">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" id="ipadd" style="display:none" value="<?=$ipaddress?>">
								<input type="text" id="fname" class="form-control inp-mailer" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" id="lname" class="form-control inp-mailer" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" class="form-control inp-mailer" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Subject</label>
								<input type="text" id="subject" class="form-control inp-mailer" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control inp-mailer" placeholder="Write us something"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input id="submit-email" type="submit" value="Send Message" class="btn btn-primary inp-mailer">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-pull-5 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 Tanauan Sambat, <br> Batangas</li>
							<li class="phone"><a href="tel://1234567920">+ 123456</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">help@garrykristel.com</a></li>
							<li class="url"><a href="http://help.garrykristel.com">help.garrykristel.com</a></li>
						</ul>
					</div>

				</div>
			</div>
			
		</div>
	</div>

	<?php include("footer.php"); ?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
<!-- 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
 -->
	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/mailer.js"></script>

	</body>
</html>

