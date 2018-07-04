<?php
session_start();
include('backend/controller/controller.php');
$con= new controller();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ticketing Site | Nepal's Best Online Ticket Booking Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.woff">
  <link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.ttf">

  <link rel="stylesheet" type="text/css" href="custom.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="row" id="header">
		<marquee style="font-weight: bolder; font-size: 20px;">The No.1 site for online ticket booking.</marquee>
	</div><!-- end header -->

	<div class="container" id="motherContainer">
		<div class="row" id="navbar-row">
			<div class="navbar navbar-inverse" id="main-navContainer" role="navigation">
				<div class="container-fluid" id="second-navContainer">
					<div class="navbar-header">
						<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse1">
							<span class="sr-only">Toogle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="#" style="font-family: Monotype Corsiva; font-size: 30px; color: white; font-weight: bold;">TicketingSite</a>
					</div><!-- end navbar-header-->

					<div class="collapse navbar-collapse" id="collapse1">
						<ul class="nav navbar-nav" id="nav-headings">

							<li>
								<a href="index.php" id="nav-home-icon"><span class="glyphicon glyphicon-home" style="font-size: 30px; margin-right: 10px;"></span></a>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="inside-valley">Inside Valley <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Swayambhu</a></li>
									<li><a href="#">Godawari</a></li>
									<li><a href="#">Pashupati</a></li>
									<li><a href="#">Chandragiri</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="outside-valley">Outside Valley <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Chitwan</a></li>
									<li><a href="#">Pokhara</a></li>
									<li><a href="#">Illam</a></li>
									<li><a href="#">Sikkim</a></li>
								</ul>
							</li>

							<li><a href="#" id="nav-contact">Contact</a></li>
							<li><a href="#" id="nav-about-us">About Us</a></li>

						</ul>
								
						<form class="navbar-form navbar-right" role="search" style="color: black;">
							<input type="text" class="form-control" placeholder="Search here..." style="width: 270px;">
								<button type="submit" class="btn" style="background-color: white;"><span class="glyphicon glyphicon-search" style="color: black;"></span></button>
						</form><!-- end navbarForm -->
						
					</div><!-- end collapse1 -->
				</div><!-- end second-navContainer -->
			</div><!-- end main-navContainer -->
		</div><!-- end navbar-row -->

		<div class="row" id="content">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="login">
				<form method="post" action="book.php">
					<h3>Login</h3>
					<p><text>Log into our site for booking and further updates.</text></p><br>
					<div class="input-group">
						<span class="input-group-addon" style="font-weight: bolder;">@</span>
						<input type="text" name="email" class="form-control" placeholder="Enter your email..." required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon" style="font-weight: bolder;">***</span>
						<input type="password" name="password" class="form-control" value="password" required="required">
					</div><br>
					<button type="submit" name="login" class="btn btn-default form-control" id="carousel-login-button" required="required">Login</button>
				</form>

<?php
	if(isset($_POST['login'])){
		unset($_POST['login']);
		$email= $_POST['email'];
		$password= $_POST['password'];

		$con->login('signup_tbl','email',$email,'password',$password,'book');
	}
?>

				<text> Not registered ? </text> &nbsp; <a href="#carousel-modal" data-toggle="modal">Create a new account</a>

				<div class="modal fade" id="carousel-modal" tabindex="-1" role="dialog" aria-labelledby="carousel-modal-label" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color: rgb(0,51,49);">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								</button>
								<h4 class="modal-title" id="carousel-modal-label">Registration</h4>
							</div><!-- end modal-header -->

							<div class="modal-body">
								<form method="post">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<label>Name:</label><input type="text" name="name" placeholder="Enter your name...." class="form-control" required="required"><br>
										<label>Date of Birth:</label><input type="date" name="dob" class="form-control" required="required"><br>
										<label>Contact no:</label><input type="text" name="contact" class="form-control" required="required"><br>
										<label>Address:</label><input type="text" name="address" class="form-control" required="required"><br>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<label>E-mail:</label><input type="email" name="email" class="form-control" required="required"><br>
										<label>Password:</label><input type="password" name="password" class="form-control" required="required"><br>
										<label>Alternate Email:</label><input type="email" name="alternate_email" class="form-control" required="required">
										<input type="checkbox" name="send_email" style=" margin-top: 15px;">  <b style="font-size: 11px;">Send me an email after this registration.</b><br>
										<input type="submit" name="submit" class="btn btn-default" style="margin-top: 13px;">
									</div>
								</form>
<?php
if(isset($_POST['submit'])){
	unset($_POST['submit']);
	$data= $_POST;
	$name= $_POST['name'];
	$dob= $_POST['dob'];
	$contact= $_POST['contact'];
	$address= $_POST['address'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$alternate_email= $_POST['alternate_email'];
	$send_email= $_POST['send_email'];

	$con->insertRow('registration_tbl',$data);
}
?>
							</div><!-- end modal-body -->

							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div><!-- end modal-content -->
					</div><!-- end modal-dialog -->
				</div><!-- end carousel-modal -->

			</div><!-- end login -->

			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="content-carousel">
				<div class="carousel slide" id="thisCarousel">
 					<!-- Carousel indicators -->
 					<ol class="carousel-indicators">
 						<li data-target="#thisCarousel" data-slide-to="0" class="active"></li>
 						<li data-target="#thisCarousel" data-slide-to="1"></li>
 						<li data-target="#thisCarousel" data-slide-to="2"></li>
					</ol>
 					
 					<!-- Carousel items -->
 					<div class="carousel-inner">
 						<div class="item active">
 							<img src="images/content-image.png" alt="First pic" style="height: 350px; width: 780px;">
						</div>
						<div class="item" id="carousel-image">
							<img src="images/bg-bus.jpg" alt="Second pic" style="height: 350px; width: 780px;">
						</div>
						<div class="item" id="carousel-image">
							<img src="images/content-image2.png" alt="Third pic" style="height: 350px; width: 780px;">
						</div>
					</div>

				</div><!-- end thisCarousel -->
			</div><!-- end content-carousel -->
		</div><!-- end content -->


		<div class="row" id="second-content">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="facility-info">
				<img src="images/logo.png">&emsp;&emsp;
				<text style="font-size: 17px;"><span style="font-family: Monotype Corsiva; font-size: 30px;">TicketingSite</span>&nbsp;&nbsp;offers you <span style="font-size: 30px;">reasonable</span> and affordable prices <span style="font-size: 30px;">without</span> compromising quality <span style="font-size: 30px;">SERVICES</span></text><span style="float: right; margin-right: -28px;"><img src="images/logo.png"></span>
			</div><!-- end facility-info -->
		</div><!-- end second-content -->
		

		<div class="row" id="third-content">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="tabbable-info-main">
				<div class="row" id="tabbable-info-header">
					<div style="text-align: center;" id="info-header-text">
						<b>What's new ?</b>
					</div><!-- end info-header-text -->
				</div><!-- end tabbable-info-header -->
				
				<div class="row" id="info-content">
					<div class="tabbable" id="tabbable-tab">	
						<ul class="nav nav-tabs">
							<li class="active"><a href="#gallery" data-toggle="tab">Gallery</a></li>
							<li><a href="#offers" data-toggle="tab">Offers</a></li>
							<li><a href="#events" data-toggle="tab">Events</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="gallery">
								<div class="row" id="gallery-content1">

									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="gallery-heading">
										<b style="color: orange;">New Policies say luxurious travels </b>
									</div><!-- end gallery-heading -->

									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="gallery-image1">
										<img src="images/gallery-image.png">
										<small>Better appearance!</small>
									</div><!-- end gallery-image1 -->

									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="gallery-image2">
										<img src="images/gallery-image2.png">
										<small>Comfortable seats!</small>
									</div><!-- end gallery-image2 -->

									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="gallery-image3">
										<img src="images/gallery-image3.png">
										<small>More space!</small>
									</div><!-- end gallery-image3 -->

									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="gallery-image4">
										<img src="images/gallery-image4.png">
										<small>Lunch Service!</small>
									</div><!-- end gallery-image4 -->

									<button class="btn form-control">View Gallery in full size</button>
								</div><!-- end gallery-content1 -->
							</div><!-- end gallery -->

							<div class="tab-pane" id="offers">

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="offer-image">
									<img src="images/discount-image.png">
								</div><!-- end offer-image -->

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="offer-content">
									<div class="row" id="offer-sub-content">
										<b>Special Offer !!!</b>
										<small><span style="font-weight: bold; color: lime;">Zero</span> charges on tickets. Grab your seat quickly ! </small><br>
										<button class="btn btn-primary">Book Now !</button>
									</div>
								</div><!-- end offer-content -->

							</div><!-- end offers -->

							<div class="tab-pane" id="events">
								<div class="row" id="event1">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="event-image">
										<img src="images/event-image2.png">
									</div><!-- end event-image -->

									<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="event-content">
										<text>Company's 10<sup>th</sup> Anniversary at Soaltee &emsp;<a href="#">Read more.....</a></text>
									</div><!-- end event-content -->
								</div><!-- end event1 -->

								<div class="row" id="event2">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="event-image2">
										<img src="images/event-image.png">
									</div><!-- end event-image2 -->

									<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="event-content2">
										<text>New travel policies to be held by the end of March &emsp;<a href="#">Read more.....</a></text>
									</div><!-- end event-content2 -->

								</div><!-- end event2 -->
							</div><!-- end events -->

						</div><!-- end tab-content -->
					</div><!-- end tabbable -->
				</div><!-- end info-content-->
			</div><!-- end tabbable-info-main -->

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="popular-chart">
				<div class="row" id="chart-header">
					<div style="text-align: center;" id="chart-header-text">
						<b>Popular Routes</b>
					</div><!-- end chart-header-text -->
				</div><!-- end chart-header -->
			
				<div class="row" id="chart-content">
					<div class="row" id="chart-table">
						<table class="table">
							<tr><td>Kathmandu-Chitwan</td></th>
							<tr><td>Kathmandu-Pokhara</td></th>
							<tr><td>Kathmandu-Jhapa</td></th>
							<tr><td>Kathmandu-Kavre</td></th>
							<tr><td>Kathmandu-Kanchanpur</td></th>
						</table>
					</div><!-- end chart-table -->
				</div><!-- end chart-content -->
			</div><!-- end popular-chart -->

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="give-call">
				<div class="row" id="call-header">
					<div style="text-align: center;" id="call-header-text">
						<b>Give Us a Call</b>
					</div><!-- end call-header-text -->
				</div><!-- end call-header -->

				<div class="row" id="call-image-content">
					<div class="row" id="call-image">
						<img src="images/call.png">
					</div>
					<div id="call-button">
						<button class="btn">Make a Call</button>
					</div>
				</div><!-- end call-image-content -->
			</div><!-- end give-call -->

		</div><!-- end third-content -->
	</div><!-- end  motherContainer -->

	<div class="row" id="footer">
		<div class="container">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="copy-right">
				<text>Copyright &copy; 2017 By Megha Tamang</text>
			</div><!-- end copy-right -->

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="about">
				<b>About</b><br>
				<p style="text-align: justify;">This is my new web development project.I hope it is good. This is my new web development project.I hope it is good. This is my new web development project.I hope it is good. This is my new web development project.This is my new web development project.</p>
			</div><!-- end about -->

			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="navigation">
				<b>Navigation</b><br>
				<text><a href="#">Home</a></text><br>
				<text><a href="#">Inside Valley</a></text><br>
				<text><a href="#">Outside Valley</a></text><br>
				<text><a href="#">Contact</a></text><br>
				<text><a href="#">About Us</a></text><br>
			</div><!-- end navigation -->

			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="follow">
				<b>Follow Us on</b><br>
				<text><a href="#">Facebook</a></text><br>
				<text><a href="#">Instagram</a></text><br>
				<text><a href="#">Twitter</a></text><br>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="footer-login">
				<b>Login  <span class="glyphicon glyphicon-log-in"></span></b><br>
				<p style="text-align: justify;">Stay updated to our site beside wherever you are. <a href="#footer-modal" data-toggle="modal">Click here to login !</a></p>
					<div class="modal fade" id="footer-modal" tabindex="-1" role="dialog" aria-labelledby="footer-modal-label" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="background-color: rgb(0,51,49);">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">
										&times;
									</button>
									<h4 class="modal-title" id="footer-modal-label">Log In</h4>
									<p><text>Log into our site for booking and further updates.</text></p>
								</div><!-- end modal-header -->

								<div class="modal-body">
									<form method="post">
										<div class="input-group">
											<span class="input-group-addon" style="font-weight: bolder;">@</span>
											<input type="text" name="email" class="form-control" placeholder="Enter your email...">
										</div><br>
										<div class="input-group">
											<span class="input-group-addon" style="font-weight: bolder;">***</span>
											<input type="password" name="password" class="form-control" value="password">
										</div><br>
										<button type="submit" name="login" class="btn btn-default form-control" id="footer-login-button">Login</button>
									</form>
<?php
	if(isset($_POST['login'])){
		unset($_POST['login']);
		$email= $_POST['email'];
		$password= $_POST['password'];

		$con->login('signup_tbl','email',$email,'password',$password,'book');
	}
?>
								</div><!-- end modal-body -->

								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div><!-- end modal-content -->
						</div><!-- end modal-dialog -->
					</div><!-- end carousel-modal -->
			</div><!-- end footer-login -->
		</div><!-- end container -->
	</div><!-- end footer -->
</body>
</html>
