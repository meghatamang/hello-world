<?php
include('backend/controller/controller.php');
$con= new Controller();
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
								
						<div class="navbar-right" id="profile-signout" style="margin-top: 15px; margin-right: 15px;">
							<img src="#" alt="user-image" style="width: 20px; height: 20px;">&nbsp;
								<a class="dropdown dropdown-toggle" data-toggle="dropdown" href="#" id="user-name" style="text-decoration: none; color: white;">User name <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li style="text-align: center; margin: 0;"><a href="#">View profile</a></li>
									<li class="divider" style="margin-top: 0;"></li>
									<li><a href="#"><span class="glyphicon glyphicon-cog"></span>&emsp;Account Settings</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&emsp;Sign Out</a></li>
								</ul>
						</div><!-- end user-signout -->

					</div><!-- end collapse1 -->
				</div><!-- end second-navContainer -->
			</div><!-- end main-navContainer -->
		</div><!-- end navbar-row -->

		<div class="row" id="booking-content">
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="booking-content1">
				<div class="row" id="modify-search">
					<b>Modify Search</b>
				</div><!-- end modify-search -->
				<form method="post">
					<label>From&nbsp;:</label>&emsp;
						<select name="from" style="width: 100px;">
							<option>Kathmandu</option>
							<option>Chitwan</option>
							<option>Pokhara</option>
							<option>Hetauda</option>
							<option>Jhapa</option>
							<option>Mahendranagar</option>
						 </select><br><br>
					<label>To&emsp;&nbsp;&nbsp;:</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="to" style="width: 100px;">
							<option>Kathmandu</option>
							<option>Chitwan</option>
							<option>Pokhara</option>
							<option>Hetauda</option>
							<option>Jhapa</option>
							<option>Mahendranagar</option>
						</select><br><br>
					<label>Time&nbsp;:</label>&emsp;&nbsp;<input type="text" name="departure_time" style="width: 104px;"><br>
					<button class="btn btn-info">Search</button>
				</form>	
			</div><!-- end booking-content1 -->
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" id="booking-content2">
				<table class="table table-condensed col-lg-10 col-md-10 col-sm-12 col-xs-12">
					<thead>
						<tr>
							<th>Bus</th>
							<th>Destination</th>
							<th>Journey Date</th>
							<th>Departure Time</th>
							<th>Arrival Time</th>
							<th>Per Adult</th>
							<th>Per Children</th>
							<th>Book Now !</th>
						</tr>
					</thead>

					<tbody>

<?php
	$select= $con->selectByLimit('booking_details','booking_id',0,7);
	foreach($select as $display){
?>

						<tr>
							<td style="color: orange;"><?=$display['bus_no']?></td>
							<td><?=$display['destination']?></td>
							<td><?=$display['journey_date']?></td>
							<td><?=$display['departure_time']?></td>
							<td><?=$display['arrival_time']?></td>
							<td style="color: blue;">Rs. <?=$display['adult_price']?></td>
							<td style="color: blue;">Rs. <?=$display['children_price']?></td>
							<td><a href="ticket.php"><button class="btn">Book</button></a></td>
						</tr>

<?php
	}
?>
					</tbody>
				</table>
				
			</div><!-- end booking-content2 -->
		</div><!-- end booking-content -->
		
	</div><!-- end motherContainer -->


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

			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="footer-logout">
				<b>Logout  <span class="glyphicon glyphicon-log-in"></span></b><br>
				<p><a href="#" data-toggle="modal">Click here to logout !</a></p>
					
			</div><!-- end footer-login -->
		</div><!-- end container -->
	</div><!-- end footer -->
</body>
</html>